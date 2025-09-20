<?php 
include "config.php"; 
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM student WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa - SMA Plus PGRI Cibinong</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>

        <label>Jenis Kelamin:</label><br>
        <select name="jekel" required>
            <option <?php if($row['jekel']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
            <option <?php if($row['jekel']=="Perempuan") echo "selected"; ?>>Perempuan</option>
        </select><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" required><br><br>

        <input type="submit" name="update" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali</a>

    <?php
    if (isset($_POST['update'])) {
        $nama  = $_POST['nama'];
        $jekel = $_POST['jekel'];
        $kelas = $_POST['kelas'];

        $sql = "UPDATE student SET nama='$nama', jekel='$jekel', kelas='$kelas' WHERE id=$id";
        if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil diupdate! <a href='index.php'>Lihat Data</a>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
    ?>
</body>
</html>
