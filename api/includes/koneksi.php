<?php
// Kredensial Supabase PostgreSQL
$host     = "aws-0-ap-northeast-1.pooler.supabase.com";
$port     = "6543";
$db       = "postgres";
$user     = "postgres.bfxowdkszoepsgracyqt";
$pass     = "ditoGanteng";

// String koneksi PostgreSQL
$connection_string = "host={$host} port={$port} dbname={$db} user={$user} password={$pass}";

// Membuat koneksi ke Supabase
$koneksi = pg_connect($connection_string);

if (!$koneksi) {
    die("Koneksi ke Supabase gagal: " . pg_last_error());
}
?>