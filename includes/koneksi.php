<?php
$host     = "aws-0-ap-northeast-1.pooler.supabase.com";
$port     = "6543";
$dbname   = "postgres";
$user     = "postgres.lakewdkrusarsizifxfu";
$password = "ditoGanteng";

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Koneksi Supabase gagal: " . $e->getMessage());
}
?>