# CRUD Students - PTS Programming Web

Project ini dibuat untuk **Penilaian Tengah Semester (PTS) Student Day Programming Web**  
Materi: CRUD (Create, Read, Update, Delete) data menggunakan **PHP & MySQL**

## 🗂 Struktur Database
Tabel: `students`
- `id` (INT, AUTO_INCREMENT, PRIMARY KEY)
- `nama` (VARCHAR)
- `jekel` (ENUM: 'L','P')
- `kelas` (VARCHAR)

## 🚀 Fitur
- Tambah data siswa
- Lihat daftar siswa
- Edit data siswa
- Hapus data siswa

## ⚙️ Cara Menjalankan
1. Import database:
   ```sql
   CREATE DATABASE school;
   USE school;
   CREATE TABLE students (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nama VARCHAR(100),
       jekel ENUM('L','P'),
       kelas VARCHAR(20)
   );