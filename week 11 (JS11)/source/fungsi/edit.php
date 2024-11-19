<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: ../index.php");
    exit;
}

require '../config/koneksi.php';
require '../fungsi/pesan_kilat.php';
require '../fungsi/anti_injection.php';

// Aktifkan debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!empty($_GET['jabatan']) && $_GET['jabatan'] === 'edit') {
    // Ambil data dari form
    $id = antiInjection($koneksi, $_POST['id']);
    $jabatan = antiInjection($koneksi, $_POST['jabatan']);
    $keterangan = antiInjection($koneksi, $_POST['keterangan']);

    // Validasi data
    if (empty($id) || empty($jabatan)) {
        pesan('danger', "ID dan Nama Jabatan tidak boleh kosong.");
        header("Location: ../index.php?page=jabatan");
        exit;
    }

    // Query untuk update data jabatan
    $query = "UPDATE jabatan SET 
              jabatan = '$jabatan', 
              keterangan = '$keterangan' 
              WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        pesan('success', "Jabatan berhasil diperbarui.");
    } else {
        pesan('danger', "Gagal memperbarui jabatan: " . mysqli_error($koneksi));
    }

    // Redirect ke halaman jabatan
    header("Location: ../index.php?page=jabatan");
    exit;
} else {
    // Jika akses tidak valid
    pesan('danger', "Akses tidak valid.");
    header("Location: ../index.php?page=jabatan");
    exit;
}
