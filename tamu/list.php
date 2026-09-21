<?php
include __DIR__ . '/../includes/koneksi.php';
include __DIR__ . '/../includes/header.php';

$stmt = $koneksi->query("SELECT * FROM tamu ORDER BY id DESC");
$tamu_list = $stmt->fetchAll();
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold text-dark mb-1">Daftar Tamu</h3>
        <p class="text-muted mb-0">Kelola informasi data tamu terdaftar.</p>
    </div>
    <a href="/tamu/tambah.php" class="btn btn-primary px-4 py-2">
        <i class="fa-solid fa-user-plus me-2"></i>Tambah Tamu Baru
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">No</th>
                        <th>Nama Lengkap</th>
                        <th>Nomor Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($tamu_list)) : ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada data tamu terdaftar.</td>
                        </tr>
                    <?php else : ?>
                        <?php 
                        $no = 1;
                        foreach ($tamu_list as $row) : 
                        ?>
                        <tr>
                            <td class="ps-4"><?= $no++; ?></td>
                            <td class="fw-semibold text-dark"><?= htmlspecialchars($row['nama'] ?? $row['nama_lengkap'] ?? ''); ?></td>
                            <td><?= htmlspecialchars($row['no_hp']); ?></td>
                            <td><?= htmlspecialchars($row['email']); ?></td>
                            <td><?= htmlspecialchars($row['alamat']); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>