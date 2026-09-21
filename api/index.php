<?php
// Router sederhana untuk Vercel Serverless Function
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Menghapus trailing slash jika ada
$file = ltrim($request_uri, '/');

if (empty($file)) {
    $file = 'index.php';
}

// Mencegah akses langsung ke folder api/
if (strpos($file, 'api/') === 0) {
    http_response_code(403);
    echo "Forbidden";
    exit;
}

// Mengarahkan ke file PHP yang sesuai di direktori utama
if (file_exists(__DIR__ . '/../' . $file)) {
    require __DIR__ . '/../' . $file;
} elseif (file_exists(__DIR__ . '/../' . $file . '.php')) {
    require __DIR__ . '/../' . $file . '.php';
} else {
    http_response_code(404);
    echo "404 - Halaman Tidak Ditemukan";
}
?>