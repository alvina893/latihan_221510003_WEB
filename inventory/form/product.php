<?php require('includes/navbar.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>PRODUK</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="content">
    <h1 class="opening-header">MANAJEMEN PRODUK</h1>

    <div class="container">
      <form action="process.php" method="POST">
        <h2>➕ Tambah Produk Baru</h2>
        </section>
        <label for="nmaProduk">Nama Produk:</label>
        <input type="text" id="nmaProduk" name="nmaProduk" required />

        <label for="hargaModal">Harga Modal:</label>
        <input type="text" id="hargaModal" name="hargaModal" required />

        <label for="hargaJual">Harga Jual:</label>
        <input type="text" id="hargaJual" name="hargaJual" required />

        <label for="stokProduk">Stok:</label>
        <input type="text" id="stokProduk" name="stokProduk" required />

        <button type="submit">Simpan Produk Baru 💾</button>
      </form>
    </div>

  </div>
</body>

</html>