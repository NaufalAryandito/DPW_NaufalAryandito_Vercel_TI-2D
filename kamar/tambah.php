<?php
include __DIR__ . '/../includes/header.php';
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-white py-3 border-0">
                <h4 class="fw-bold mb-0">Tambah Data Kamar</h4>
            </div>
            <div class="card-body p-4">
                <form action="/kamar/proses_tambah.php" method="POST">
                    <div class="mb-3">
                        <label for="nomor_kamar" class="form-label fw-semibold">Nomor Kamar</label>
                        <input type="text" class="form-control" id="nomor_kamar" name="nomor_kamar" placeholder="Contoh: 101" required>
                    </div>

                    <div class="mb-3">
                        <label for="tipe_kamar" class="form-label fw-semibold">Tipe Kamar</label>
                        <select class="form-select" id="tipe_kamar" name="tipe_kamar" required>
                            <option value="Standard">Standard</option>
                            <option value="Deluxe">Deluxe</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="harga_per_malam" class="form-label fw-semibold">Harga per Malam (Rp)</label>
                        <input type="number" class="form-control" id="harga_per_malam" name="harga_per_malam" placeholder="Contoh: 500000" required>
                    </div>

                    <div class="mb-4">
                        <label for="status" class="form-label fw-semibold">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Tersedia">Tersedia</option>
                            <option value="Terisi">Terisi</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" name="submit" class="btn btn-primary px-4">Simpan</button>
                        <a href="/kamar/list.php" class="btn btn-secondary px-4">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>