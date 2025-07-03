<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Tambah Siswa</h2>
    <form method="POST" action="">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jk" value="Laki-laki" required> Laki-laki
            <input type="radio" name="jk" value="Perempuan"> Perempuan
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <button name="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tanggal_lahir'];

    mysqli_query($conn, "INSERT INTO siswa (nama, alamat, jenis_kelamin, tanggal_lahir) VALUES ('$nama', '$alamat', '$jk', '$tgl')");
    echo "<script>window.location='index.php';</script>";
}
?>
</body>
</html>
