<?php
$host     = "aws-0-ap-northeast-1.pooler.supabase.com";
$port     = "6543";
$db       = "postgres";
$user     = "postgres.bfxowdkszoepsgracyqt";
$pass     = "ditoGanteng";

try {
    $dsn = "pgsql:host={$host};port={$port};dbname={$db}";
    $koneksi = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Koneksi ke Supabase gagal: " . $e->getMessage());
}
?>