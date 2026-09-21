<?php
$host     = "DATABASE_URL=postgresql://postgres.lakewdkrusarsizifxfu:ditoGanteng@aws-0-ap-northeast-1.pooler.supabase.com:6543/postgres; // Ganti dengan host Supabase Anda
$port     = "5432";
$dbname   = "postgres";
$user     = "postgres";
$password = "ditoGanteng";            // Masukkan password DB Supabase di sini

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>