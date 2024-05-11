<?php
// Koneksi DB
require '../koneksi.php';

// Memeriksa parameter id apakah telah diterima oleh url
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query Untuk Menghapus Data Berdasarkan ID
    $sql = "DELETE FROM dokter WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    // Alert
    echo "<script>alert('Data berhasil dihapus.'); window.location='index.php';</script>";
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
?>