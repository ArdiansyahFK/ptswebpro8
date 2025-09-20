<?php include "config.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Data Siswa - SMA Plus PGRI Cibinong</title>
</head>
<body>
    <h2>Data Siswa SMA Plus PGRI Cibinong</h2>
    <a href="tambah.php">+ Tambah Siswa</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($koneksi, "SELECT * FROM student");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['jekel']."</td>";
            echo "<td>".$row['kelas']."</td>";
            echo "<td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                <a href='hapus.php?id=".$row['id']."' onclick=\"return confirm('Yakin mau hapus?');\">Hapus</a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
