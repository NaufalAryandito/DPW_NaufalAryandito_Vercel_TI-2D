<?php
include __DIR__ . '/../includes/koneksi.php';
include __DIR__ . '/../includes/header.php';

$stmt = $koneksi->query("SELECT * FROM kamar ORDER BY id DESC");
$kamar_list = $stmt->fetchAll();
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold text-dark mb-1">Daftar Kamar</h3>
        <p class="text-muted mb-0">Kelola informasi kamar hotel yang tersedia.</p>
    </div>
    <a href="/kamar/tambah.php" class="btn btn-primary px-4 py-2">
        <i class="fa-solid fa-plus me-2"></i>Tambah Kamar Baru
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4 overflow-hidden">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4">No</th>
                        <th>Nomor Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Harga per Malam</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($kamar_list)) : ?>
                        <tr>
                            <td colspan="5" class="text-center py-4 text-muted">Belum ada data kamar terdaftar.</td>
                        </tr>
                    <?php else : ?>
                        <?php 
                        $no = 1;
                        foreach ($kamar_list as $row) : 
                        ?>
                        <tr>
                            <td class="ps-4"><?= $no++; ?></td>
                            <td class="fw-semibold text-dark"><?= htmlspecialchars($row['nomor_kamar']); ?></td>
                            <td><?= htmlspecialchars($row['tipe_kamar']); ?></td>
                            <td>Rp <?= number_format($row['harga_per_malam'], 0, ',', '.'); ?></td>
                            <td>
                                <span class="badge bg-<?= $row['status'] == 'Tersedia' ? 'success' : 'danger'; ?>">
                                    <?= htmlspecialchars($row['status']); ?>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>