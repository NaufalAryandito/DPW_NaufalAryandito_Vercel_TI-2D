<?php
include __DIR__ . '/../includes/koneksi.php';

if (isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_lengkap = trim($_POST['nama_lengkap'] ?? '');
    $email        = trim($_POST['email'] ?? '');
    $telepon      = trim($_POST['telepon'] ?? '');
    $alamat       = trim($_POST['alamat'] ?? '');

    try {
        $stmt = $koneksi->prepare("INSERT INTO tamu (nama_lengkap, email, telepon, alamat) VALUES (:nama, :email, :telepon, :alamat)");
        $stmt->execute([
            ':nama'    => $nama_lengkap,
            ':email'   => $email,
            ':telepon' => $telepon,
            ':alamat'  => $alamat
        ]);

        header("Location: /tamu/list.php?status=sukses");
        exit;
    } catch (PDOException $e) {
        die("Gagal menambahkan data tamu: " . $e->getMessage());
    }
}
?>