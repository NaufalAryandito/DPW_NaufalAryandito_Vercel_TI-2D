<?php
include '../includes/header.php';
?>

<h2>Tambah Data Tamu</h2>
<form action="proses_tambah.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" name="telepon" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">No. Identitas (NIK/Paspor)</label>
        <input type="text" name="nik" class="form-control" required>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="list.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>