<?php

$servername = "localhost";
$database = "uinsi32";
$username = "root";
$password = "";

// buat koneksi database

$conn = mysqli_connect($servername, $username, $password, $database);

// cek koneksi

if (!$conn) {
    die("koneksi gagal".mysql_connect_error());
}

?>