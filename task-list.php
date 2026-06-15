<?php include 'db.php'; 
$result = mysqli_query($conn, "SELECT * FROM submissions ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h3 class="mb-4">Daftar Pengumpulan Tugas</h3>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Mata Kuliah</th>
                        <th>Status</th>
                        <th>File</th>
                    </tr>
                </thead>

                <tbody>

                <?php while($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['class'] ?></td>
                        <td><?= $row['course'] ?></td>

                        <td>
                            <span class="badge bg-success">
                                <?= $row['status'] ?>
                            </span>
                        </td>

                        <td>
                            <a href="<?= $row['file_url'] ?>" target="_blank" class="btn btn-sm btn-primary">
                                Download
                            </a>
                        </td>
                    </tr>

                <?php } ?>

                </tbody>
            </table>

        </div>
    </div>

</div>

</body>
</html>