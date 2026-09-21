<?php
include 'includes/koneksi.php';
include 'includes/header.php';

// Menghitung statistik untuk ringkasan dashboard (PostgreSQL)
$res_kamar  = pg_query($koneksi, "SELECT COUNT(*) AS total FROM kamar");
$total_kamar = $res_kamar ? pg_fetch_assoc($res_kamar)['total'] : 0;

$res_tamu   = pg_query($koneksi, "SELECT COUNT(*) AS total FROM tamu");
$total_tamu  = $res_tamu ? pg_fetch_assoc($res_tamu)['total'] : 0;

$res_terisi = pg_query($koneksi, "SELECT COUNT(*) AS total FROM kamar WHERE status='Terisi'");
$kamar_terisi = $res_terisi ? pg_fetch_assoc($res_terisi)['total'] : 0;
?>

<div class="row mb-4">
    <div class="col-12">
        <h3 class="fw-bold text-dark mb-1">Dashboard Overview</h3>
        <p class="text-muted">Selamat datang di sistem manajemen informasi booking hotel.</p>
    </div>
</div>

<!-- Cards Ringkasan -->
<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card card-stats bg-primary text-white shadow-sm p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase fw-semibold text-white-50">Total Kamar</h6>
                    <h2 class="fw-bold mb-0"><?= $total_kamar; ?></h2>
                </div>
                <div class="icon-box"><i class="fa-solid fa-door-open"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-stats bg-warning text-white shadow-sm p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase fw-semibold text-white-50">Kamar Terisi</h6>
                    <h2 class="fw-bold mb-0"><?= $kamar_terisi; ?></h2>
                </div>
                <div class="icon-box"><i class="fa-solid fa-bed"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-stats bg-success text-white shadow-sm p-3">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-uppercase fw-semibold text-white-50">Terdaftar Tamu</h6>
                    <h2 class="fw-bold mb-0"><?= $total_tamu; ?></h2>
                </div>
                <div class="icon-box"><i class="fa-solid fa-users"></i></div>
            </div>
        </div>
    </div>
</div>

<!-- Akses Cepat -->
<div class="card border-0 shadow-sm rounded-4 p-4">
    <h5 class="fw-bold mb-3"><i class="fa-solid fa-rocket me-2 text-primary"></i>Akses Cepat</h5>
    <div class="d-flex gap-3 flex-wrap">
        <a href="kamar/tambah.php" class="btn btn-primary px-4 py-2"><i class="fa-solid fa-plus me-2"></i>Tambah Kamar Baru</a>
        <a href="tamu/tambah.php" class="btn btn-outline-primary px-4 py-2"><i class="fa-solid fa-user-plus me-2"></i>Tambah Tamu Baru</a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>