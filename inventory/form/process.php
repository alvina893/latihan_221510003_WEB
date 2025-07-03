<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "posdb";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nmaProduk = $_POST['nmaProduk'];
$hargaModal = $_POST['hargaModal'];
$hargaJual = $_POST['hargaJual'];
$stokProduk = $_POST['stokProduk'];

$sql = "INSERT INTO produk (nmaProduk, hargaModal, hargaJual, stokProduk) VALUES ('$nmaProduk', '$hargaModal', '$hargaJual', '$stokProduk')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Successfully saved $nmaProduk!'); window.location.href='product.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
