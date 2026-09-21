-- 1. Buat enum tipe status kamar jika belum ada
DO $$ 
BEGIN
    IF NOT EXISTS (SELECT 1 FROM pg_type WHERE typname = 'status_kamar_type') THEN
        CREATE TYPE status_kamar_type AS ENUM ('Tersedia', 'Terisi');
    END IF;
END $$;

-- 2. Buat tabel kamar
CREATE TABLE IF NOT EXISTS kamar (
    id SERIAL PRIMARY KEY,
    nomor_kamar VARCHAR(10) NOT NULL UNIQUE,
    tipe_kamar VARCHAR(50) NOT NULL,
    harga_per_malam INT NOT NULL,
    status status_kamar_type DEFAULT 'Tersedia'
);

-- 3. Buat tabel tamu
-- 1. Hapus tabel tamu lama jika ada (perhatian: data di tabel tamu akan terhapus)
DROP TABLE IF EXISTS tamu;

-- 2. Buat tabel tamu baru dengan struktur yang pasti cocok dengan kode PHP
CREATE TABLE tamu (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(150) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL
);
