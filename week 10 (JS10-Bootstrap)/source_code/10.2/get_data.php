<?php
session_start();
include 'koneksi.php';
include 'csrf.php'; // Memastikan token CSRF

// Ambil ID dari permintaan POST
$id = $_POST['id'];

// Query untuk mengambil data anggota berdasarkan ID
$query = "SELECT * FROM anggota WHERE id=? ORDER BY id DESC";
$sql = $db1->prepare($query);
$sql->bind_param('i', $id); // Mengikat parameter ID
$sql->execute(); // Menjalankan query
$res1 = $sql->get_result(); // Mendapatkan hasil query

// Membuat array untuk menampung data anggota
$h = [];

if ($row = $res1->fetch_assoc()) {
    $h['id'] = $row["id"];
    $h['nama'] = $row["nama"];
    $h['jenis_kelamin'] = $row["jenis_kelamin"];
    $h['alamat'] = $row["alamat"];
    $h['no_telp'] = $row["no_telp"];
}

// Mengembalikan data dalam format JSON
echo json_encode($h);

$db1->close(); // Menutup koneksi database
