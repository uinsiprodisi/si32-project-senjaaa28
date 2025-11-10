<?php

$servername = "lokalhost";
$database = "uinsi_nim";
$username = "root";
$password = "";

// buat koneksi database

$conn = mysql_connect($servername,$database,$username,$password);

// cek koneksi

if (!$conn) {
    die("koneksi gagal".mysql_connect_error());
}

echo "koneksi berhasil!";
//mysql_close();
?>