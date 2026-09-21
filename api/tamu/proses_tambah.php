<?php
include '../includes/koneksi.php';

if (isset($_POST['submit'])) {
    $nama = pg_escape_string($koneksi, $_POST['nama']);
    $email = pg_escape_string($koneksi, $_POST['email']);
    $telepon = pg_escape_string($koneksi, $_POST['telepon']);
    $nik = pg_escape_string($koneksi, $_POST['nik']);

    $query = "INSERT INTO tamu (nama, email, telepon, nik) VALUES ('$nama', '$email', '$telepon', '$nik')";
    
    $result = pg_query($koneksi, $query);

    if ($result) {
        header("Location: list.php?status=sukses");
    } else {
        echo "Gagal menambahkan data: " . pg_last_error($koneksi);
    }
}
?>