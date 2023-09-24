<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_barang";

// koneksi database
$conn = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$conn) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
