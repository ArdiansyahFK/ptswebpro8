<?php include 'config.php'; 
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Siswa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/jpg" href="logo.jpg">
</head>
<body>
  <div class="container">
    <h2>Edit Data Siswa</h2>
    <form method="POST">
      <label>Nama:</label>
      <input type="text" nama="nama" value="<?= $data['nama'] ?>" required>

      <label>Jenis Kelamin:</label>
      <select nama="jekel" required>
        <option <?= $data['jekel']=="Laki-laki"?"selected":"" ?>>Laki-laki</option>
        <option <?= $data['jekel']=="Perempuan"?"selected":"" ?>>Perempuan</option>
      </select>

      <label>Kelas:</label>
      <input type="text" nama="kelas" value="<?= $data['kelas'] ?>" required>

      <button type="submit" nama="update" class="btn">Update</button>
      <a href="index.php" class="btn-back">Kembali</a>
    </form>
  </div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $nama   = $_POST['nama'];
    $jekel = $_POST['jekel'];
    $kelas  = $_POST['kelas'];

    mysqli_query($conn, "UPDATE students SET nama='$nama', jekel='$jekel', kelas='$kelas' WHERE id=$id");
    echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
}
?>
