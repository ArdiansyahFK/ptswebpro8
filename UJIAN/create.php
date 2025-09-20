<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br>
        Jenis Kelamin: 
        <select name="jekel">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br>
        Kelas: <input type="text" name="kelas" required><br>
        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $nama  = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO students (nama, jekel, kelas) VALUES ('$nama', '$jekel', '$kelas')";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>