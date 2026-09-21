<?php
include '../includes/koneksi.php';
include '../includes/header.php';

$query = "SELECT * FROM tamu ORDER BY id DESC";
$result = pg_query($koneksi, $query);
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Tamu</h2>
    <a href="tambah.php" class="btn btn-success">+ Tambah Tamu</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>No. Identitas (NIK/Paspor)</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while ($row = pg_fetch_assoc($result)) : 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nama']); ?></td>
                <td><?= htmlspecialchars($row['email']); ?></td>
                <td><?= htmlspecialchars($row['telepon']); ?></td>
                <td><?= htmlspecialchars($row['nik']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>