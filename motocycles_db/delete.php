<?php
include 'db_connect.php';

// Ambil ID motor dari parameter URL
$id = $_GET['id'];

// Jalankan query untuk menghapus data
$koneksi->query("DELETE FROM motorcycles WHERE motor_id = $id");

// Redirect kembali ke halaman utama
header("Location: index.php");
exit;
?>
