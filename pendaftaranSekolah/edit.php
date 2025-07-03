<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Siswa</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required><?= $row['alamat']; ?></textarea>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jk" value="Laki-laki" <?= ($row['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>> Laki-laki
            <input type="radio" name="jk" value="Perempuan" <?= ($row['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="<?= $row['tanggal_lahir']; ?>" required>
        </div>
        <button name="update" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $tgl = $_POST['tanggal_lahir'];

    mysqli_query($conn, "UPDATE siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', tanggal_lahir='$tgl' WHERE id=$id");
    echo "<script>window.location='index.php';</script>";
}
?>
</body>
</html>
