<?php
include __DIR__ . '/../includes/koneksi.php';

if (isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor_kamar     = trim($_POST['nomor_kamar']);
    $tipe_kamar      = trim($_POST['tipe_kamar']);
    $harga_per_malam = (int)$_POST['harga_per_malam'];
    $status          = trim($_POST['status']);

    try {
        $stmt = $koneksi->prepare("INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam, status) VALUES (:nomor, :tipe, :harga, :status)");
        $stmt->execute([
            ':nomor'  => $nomor_kamar,
            ':tipe'   => $tipe_kamar,
            ':harga'  => $harga_per_malam,
            ':status' => $status
        ]);

        header("Location: /kamar/list.php?status=sukses");
        exit;
    } catch (PDOException $e) {
        die("Gagal menambahkan data kamar: " . $e->getMessage());
    }
}
?>