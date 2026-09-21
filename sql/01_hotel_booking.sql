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
CREATE TABLE IF NOT EXISTS tamu (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(150) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    nik VARCHAR(30) NOT NULL
);
ALTER TABLE tamu RENAME COLUMN nik TO alamat;
ALTER TABLE tamu ALTER COLUMN alamat TYPE TEXT;