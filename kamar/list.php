<?php
include '../includes/koneksi.php';
include '../includes/header.php';

$query = "SELECT * FROM kamar ORDER BY id DESC";
$stmt = $koneksi->query($query);
$kamar_list = $stmt->fetchAll();
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Kamar</h2>
    <a href="/kamar/tambah.php" class="btn btn-success">+ Tambah Kamar</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nomor Kamar</th>
                <th>Tipe Kamar</th>
                <th>Harga per Malam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($kamar_list as $row) : 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nomor_kamar']); ?></td>
                <td><?= htmlspecialchars($row['tipe_kamar']); ?></td>
                <td>Rp <?= number_format($row['harga_per_malam'], 0, ',', '.'); ?></td>
                <td>
                    <span class="badge bg-<?= $row['status'] == 'Tersedia' ? 'success' : 'danger'; ?>">
                        <?= htmlspecialchars($row['status']); ?>
                    </span>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>