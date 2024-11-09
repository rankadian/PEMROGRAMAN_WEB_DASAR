<!-- menyambungkan database -->
<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

// Periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// praktikum CRUD ajax
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');

// Buat Koneksinya
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>