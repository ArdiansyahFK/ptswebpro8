# CRUD Data Siswa - SMA Plus PGRI Cibinong

## 📌 Deskripsi
Project ini adalah aplikasi sederhana **CRUD (Create, Read, Update, Delete)** untuk mengelola data siswa.  
Dibuat menggunakan **PHP** dan **MySQL** dengan bantuan **phpMyAdmin**.  

Aplikasi ini merupakan bagian dari **Penilaian Tengah Semester (PTS) Student Day Programming Web**.  
Tema tampilan sudah disesuaikan dengan nuansa modern (putih, krem, hijau tua) serta menampilkan logo sekolah.

---

## 🗂️ Struktur Database
Database: **school**  
Tabel: **students**

| Field        | Tipe Data        | Keterangan              |
|--------------|------------------|-------------------------|
| id           | INT (Primary Key, Auto Increment) | ID unik siswa |
| nama         | VARCHAR(100)     | Nama siswa              |
| jekel        | VARCHAR(20)      | Jenis kelamin (L/P)     |
| kelas        | VARCHAR(20)      | Kelas siswa             |

---

## ⚙️ Fitur CRUD
1. **Create (Tambah Siswa)** → Menambahkan data siswa baru.  
2. **Read (Lihat Data)** → Menampilkan daftar siswa dalam bentuk tabel.  
3. **Update (Edit Siswa)** → Mengubah data siswa yang sudah ada.  
4. **Delete (Hapus Siswa)** → Menghapus data siswa dari tabel.  

---

## 🛠️ Cara Menjalankan
1. Clone/download repository ini.  
2. Pindahkan folder ke dalam `htdocs` (jika menggunakan XAMPP).  
3. Buka phpMyAdmin → buat database dengan nama **school**.  
4. Import file `school.sql` yang ada di repo ini.  
5. Jalankan project di browser:  


---



http://localhost/UJIAN/
## 👨‍🎓 Identitas
- **Sekolah:** SMA Plus PGRI Cibinong  
- **Mata Pelajaran:** Programming Web (Student Day)  
- **Penilaian:** Penilaian Tengah Semester (PTS)  
- **Project:** CRUD Data Siswa  

---

## 📷 Tampilan
- Halaman Utama: Daftar siswa dengan tabel.  
- Halaman Tambah/Edit: Form input data siswa.  
- Tema: Putih, krem, hijau tua (luxury theme).  
- Logo sekolah tampil di header dan tab browser.  

---

✍️ Dibuat sebagai latihan praktis CRUD PHP & MySQL.
