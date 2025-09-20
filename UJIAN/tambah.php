<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa - SMA Plus PGRI Cibinong</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jekel" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" required><br><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>
    <br>
    <a href="index.php">Kembali</a>

    <?php
    if (isset($_POST['simpan'])) {
        $nama  = $_POST['nama'];
        $jekel = $_POST['jekel'];
        $kelas = $_POST['kelas'];

        $sql = "INSERT INTO student (nama, jekel, kelas) VALUES ('$nama', '$jekel', '$kelas')";
        if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil ditambahkan! <a href='index.php'>Lihat Data</a>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>
