<?php

$host = "db-praktikumsubmit-015.mysql.database.azure.com";
$user = "anjani";
$password = "@Yoshikiyowo19";
$database = "praktikumsubmit";

$mysqli = mysqli_init();

mysqli_ssl_set($mysqli, NULL, NULL, NULL, NULL, NULL);

if (!mysqli_real_connect(
    $mysqli,
    $host,
    $user,
    $password,
    $database,
    3306,
    NULL,
    MYSQLI_CLIENT_SSL
)) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$conn = $mysqli;

?>