<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Siswa</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/jpg" href="logo.jpg">
</head>
<body>
  <div class="container">
    <h2>Tambah Data Siswa</h2>
    <form method="POST">
      <label>Nama:</label>
      <input type="text" name="name" required>

      <label>Jenis Kelamin:</label>
      <select name="gender" required>
        <option value="">--Pilih--</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

      <label>Kelas:</label>
      <input type="text" name="kelas" required>

      <button type="submit" name="submit" class="btn">Simpan</button>
      <a href="index.php" class="btn-back">Kembali</a>
    </form>
  </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $gender = $_POST['gender'];
    $kelas  = $_POST['kelas'];

    mysqli_query($conn, "INSERT INTO students (name, gender, kelas) VALUES ('$name','$gender','$kelas')");
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
}
?>
