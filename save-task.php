<?php
include 'db.php';

$nim    = $_POST['nim'];
$name   = $_POST['name'];
$class  = $_POST['class'];
$course = $_POST['course'];

$fileName = $_FILES['file']['name'];
$tmpFile  = $_FILES['file']['tmp_name'];

$fileName = time() . "_" . preg_replace("/[^a-zA-Z0-9.\-_]/", "", $fileName);

$storageAccount = "storagepraktikum015";
$container      = "praktikumsubmit-015";

$sasToken = "sv=2026-02-06&ss=bf&srt=sco&sp=rwlaciytfx&se=2026-06-16T02:53:09Z&st=2026-06-15T18:38:09Z&spr=https&sig=joiOmGO%2FylAPW%2FXhlKKPhZKBXFdi7Dctcq8RAbIyA%2Fo%3D";

$uploadUrl = "https://$storageAccount.blob.core.windows.net/$container/$fileName?$sasToken";

$fileData = file_get_contents($tmpFile);

$ch = curl_init($uploadUrl);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-ms-blob-type: BlockBlob",
    "Content-Type: application/octet-stream"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fileData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    die("Upload gagal: " . curl_error($ch));
}

curl_close($ch);

$file_url = "https://$storageAccount.blob.core.windows.net/$container/$fileName";

$sql = "INSERT INTO submissions
(nim, name, class, course, file_url, status)
VALUES
('$nim', '$name', '$class', '$course', '$file_url', 'Submitted')";

if (mysqli_query($conn, $sql)) {
    echo "Upload & Simpan Berhasil";
} else {
    echo "Database error: " . mysqli_error($conn);
}

?>