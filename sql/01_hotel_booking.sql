CREATE DATABASE IF NOT EXISTS db_hotel_booking;
USE db_hotel_booking;

CREATE TABLE IF NOT EXISTS kamar (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nomor_kamar VARCHAR(10) NOT NULL UNIQUE,
    tipe_kamar VARCHAR(50) NOT NULL,
    harga_per_malam INT NOT NULL,
    status ENUM('Tersedia', 'Terisi') DEFAULT 'Tersedia'
);

CREATE TABLE IF NOT EXISTS tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(150) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    nik VARCHAR(30) NOT NULL
);