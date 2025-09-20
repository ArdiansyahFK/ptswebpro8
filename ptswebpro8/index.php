<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa - SMA Plus PGRI Cibinong</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/jpg" href="logo.jpg">
</head>
<body>
  <div class="container">
    <header>
      <img src="logo.jpg" alt="Logo Sekolah" class="logo">
      <h1>Data Siswa</h1>
      <p>SMA Plus PGRI Cibinong</p>
    </header>

    <a href="add.php" class="btn">➕ Tambah Siswa</a>

    <table>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Aksi</th>
      </tr>
      <?php
      $result = mysqli_query($conn, "SELECT * FROM students");
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['nama']}</td>
                  <td>{$row['jekel']}</td>
                  <td>{$row['kelas']}</td>
                  <td>
                    <a href='edit.php?id={$row['id']}' class='btn-edit'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='btn-del' onclick='return confirm(\"Yakin hapus data?\")'>Hapus</a>
                  </td>
                </tr>";
      }
      ?>
    </table>
  </div>
</body>
</html>
