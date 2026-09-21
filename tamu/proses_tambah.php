<?php
include __DIR__ . '/../includes/koneksi.php';

if (isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = trim($_POST['nama']);
    $no_hp  = trim($_POST['telepon']); 
    $email  = trim($_POST['email']);
    $alamat = trim($_POST['alamat']);

    try {
        $stmt = $koneksi->prepare("INSERT INTO tamu (nama, no_hp, email, alamat) VALUES (:nama, :hp, :email, :alamat)");
        $stmt->execute([
            ':nama'   => $nama,
            ':hp'     => $no_hp,
            ':email'  => $email,
            ':alamat' => $alamat
        ]);

        header("Location: /tamu/list.php?status=sukses");
        exit;
    } catch (PDOException $e) {
        die("Gagal menambahkan data tamu: " . $e->getMessage());
    }
}
?>