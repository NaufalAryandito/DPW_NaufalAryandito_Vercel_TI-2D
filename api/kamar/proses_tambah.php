<?php
include '../includes/koneksi.php';

if (isset($_POST['submit'])) {
    $nomor_kamar = pg_escape_string($koneksi, $_POST['nomor_kamar']);
    $tipe_kamar = pg_escape_string($koneksi, $_POST['tipe_kamar']);
    $harga_per_malam = pg_escape_string($koneksi, $_POST['harga_per_malam']);
    $status = pg_escape_string($koneksi, $_POST['status']);

    $query = "INSERT INTO kamar (nomor_kamar, tipe_kamar, harga_per_malam, status) VALUES ('$nomor_kamar', '$tipe_kamar', '$harga_per_malam', '$status')";
    
    $result = pg_query($koneksi, $query);

    if ($result) {
        header("Location: list.php?status=sukses");
    } else {
        echo "Gagal menambahkan data: " . pg_last_error($koneksi);
    }
}
?>