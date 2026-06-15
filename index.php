<!DOCTYPE html>
<html>
<head>
    <title>PraktikumSubmit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand">PraktikumSubmit</span>
</nav>

<div class="container mt-5">

    <div class="text-center mb-4">
        <h2>Cloud Submission System</h2>
        <p class="text-muted">Upload tugas praktikum ke Azure Cloud</p>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body text-center">

                    <h5>Submit Tugas</h5>
                    <p class="text-muted">Upload file ke Azure Blob Storage</p>

                    <a href="submit-task.php" class="btn btn-primary w-100">
                        Submit Now
                    </a>

                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-body text-center">

                    <h5>Daftar Tugas</h5>
                    <p class="text-muted">Lihat hasil pengumpulan</p>

                    <a href="task-list.php" class="btn btn-success w-100">
                        View List
                    </a>

                </div>
            </div>
        </div>

    </div>

</div>

</body>
</html>