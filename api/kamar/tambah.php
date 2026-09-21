<?php
include '../includes/header.php';
?>

<h2>Tambah Data Kamar</h2>
<form action="proses_tambah.php" method="POST">
    <div class="mb-3">
        <label class="form-label">Nomor Kamar</label>
        <input type="text" name="nomor_kamar" class="form-control" required placeholder="Contoh: 101">
    </div>
    <div class="mb-3">
        <label class="form-label">Tipe Kamar</label>
        <select name="tipe_kamar" class="form-select" required>
            <option value="Standard">Standard</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Suite">Suite</option>
            <option value="Presidential">Presidential</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Harga per Malam (Rp)</label>
        <input type="number" name="harga_per_malam" class="form-control" required placeholder="Contoh: 500000">
    </div>
    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="Tersedia">Tersedia</option>
            <option value="Terisi">Terisi</option>
        </select>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    <a href="list.php" class="btn btn-secondary">Batal</a>
</form>

<?php include '../includes/footer.php'; ?>