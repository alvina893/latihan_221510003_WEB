CREATE DATABASE IF NOT EXISTS db_sekolah;
USE db_sekolah;

CREATE TABLE IF NOT EXISTS siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    alamat TEXT,
    jenis_kelamin VARCHAR(10),
    tanggal_lahir DATE
);

CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);