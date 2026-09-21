<?php
$database_url = getenv('DATABASE_URL');

if ($database_url) {
    $db_parts = parse_url($database_url);
    $host = $db_parts['host'];
    $port = $db_parts['port'] ?? '5432';
    $user = $db_parts['user'];
    $pass = $db_parts['pass'];
    $db   = ltrim($db_parts['path'], '/');

    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$db;sslmode=require";
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (PDOException $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
} else {
    die("DATABASE_URL belum diatur di Vercel.");
}
?>