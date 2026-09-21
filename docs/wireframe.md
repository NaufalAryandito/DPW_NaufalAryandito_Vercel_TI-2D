# Documentation Wireframe - Sistem Booking Hotel

## Struktur Halaman
1. **Index (`index.php`)**: Halaman utama / dashboard aplikasi.
2. **Kamar (`kamar/`)**:
   - `list.php`: Menampilkan tabel daftar kamar hotel beserta tipe dan harganya.
   - `tambah.php`: Form input kamar baru.
   - `proses_tambah.php`: Pengolahan data input kamar ke MySQL.
3. **Tamu (`tamu/`)**:
   - `list.php`: Menampilkan daftar tamu hotel yang terdaftar.
   - `tambah.php`: Form registrasi tamu baru.
   - `proses_tambah.php`: Pengolahan data input tamu ke MySQL.
4. **Includes (`includes/`)**:
   - `koneksi.php`: Koneksi ke database MySQL.
   - `header.php` & `footer.php`: Template navigasi dan layout.
5. **SQL (`sql/`)**:
   - `01_hotel_booking.sql`: Script skema basis data.