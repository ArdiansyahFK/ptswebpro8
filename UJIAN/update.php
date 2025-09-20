<?php 
include 'config.php';
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        Jenis Kelamin: 
        <select name="jekel">
            <option value="L" <?= $data['jekel']=="L"?"selected":"" ?>>Laki-laki</option>
            <option value="P" <?= $data['jekel']=="P"?"selected":"" ?>>Perempuan</option>
        </select><br>
        Kelas: <input type="text" name="kelas" value="<?= $data['kelas'] ?>" required><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>

<?php
if(isset($_POST['update'])){
    $nama  = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $kelas = $_POST['kelas'];

    $query = "UPDATE students SET nama='$nama', jekel='$jekel', kelas='$kelas' WHERE id=$id";
    mysqli_query($conn, $query);
    header("Location: index.php");
}
?>