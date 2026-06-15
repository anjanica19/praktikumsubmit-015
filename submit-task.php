<!DOCTYPE html>
<html>
<head>
    <title>Submit Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow p-4">

        <h3 class="mb-3">Submit Tugas Praktikum</h3>
        <p class="text-muted">Upload file ke Azure Storage</p>

        <form action="save-task.php" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>
                <input type="text" name="class" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mata Kuliah</label>
                <input type="text" name="course" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">File Tugas</label>
                <input type="file" name="file" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">
                Upload ke Azure
            </button>

        </form>

    </div>

</div>

</body>
</html>