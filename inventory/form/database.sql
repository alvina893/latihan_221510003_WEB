CREATE DATABASE IF NOT EXISTS posDB;
USE posDB;

CREATE TABLE IF NOT EXISTS produk (
    kodeProduk INT AUTO_INCREMENT PRIMARY KEY,
    nmaProduk VARCHAR(100) NOT NULL,
    hargaModal DEC(15) NOT NULL,
    hargaJual DEC(15) NOT NULL,
    stokProduk INT(5) NOT NULL,
    waktu TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO produk (kodeProduk, nmaProduk, hargaModal, hargaJual, stokProduk) VALUES
('00250501', 'Telur Ayam 12pcs', 22, 25, 250);
