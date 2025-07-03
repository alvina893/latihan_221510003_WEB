<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftaran Sekolah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Daftar Siswa</h2>
        <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Siswa</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>JK</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $result = mysqli_query($conn, "SELECT * FROM siswa");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
                    <td>' . $no++ . '</td>
                    <td>' . htmlspecialchars($row['nama']) . '</td>
                    <td>' . htmlspecialchars($row['alamat']) . '</td>
                    <td>' . htmlspecialchars($row['jenis_kelamin']) . '</td>
                    <td>' . htmlspecialchars($row['tanggal_lahir']) . '</td>
                    <td>
                        <a href="edit.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=' . $row['id'] . '" onclick="return confirm(\'Yakin?\')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>