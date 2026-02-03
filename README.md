# UAS Basis Data 2026

## 📌 Deskripsi Project
Project ini dibuat untuk memenuhi tugas UAS Mata Kuliah Basis Data.  
Aplikasi ini merupakan sistem berbasis web untuk mengelola data menggunakan database yang dijalankan dengan Docker.

Sistem memungkinkan admin mengelola data melalui halaman login dan dashboard.

---

## 🚀 Cara Akses Aplikasi

Buka di browser:

```bash
https://basisdata-uas.test/admin/login
```

---

## 🔑 Login Admin (Contoh)

```text
Email: admin@admin.com
Password: password
```

(Sesuaikan dengan data di database jika berbeda)

---

## ⚙️ Teknologi yang Digunakan

- PHP
- Nginx
- MariaDB / MySQL
- Docker
- Metabase
- MinIO Object Storage

---

## 🖥️ Cara Menjalankan Project

### 1. Clone Repository

```bash
git clone https://github.com/ahmadyaho798-png/basisdata-uas-2026.git
```

---

### 2. Masuk ke Folder Project

```bash
cd basisdata-uas-2026
```

---

### 3. Jalankan Docker

```bash
docker compose up -d
```

---

### 4. Buka di Browser

```bash
https://basisdata-uas.test
```

---

## 📂 Struktur Folder

```text
basisdata-uas
│── db
│── src
│── nginx
│── php
│── metabase
│── minio
│── docker-compose.yml
│── README.md
```

---

## 🗄️ Database

Database digunakan untuk menyimpan data aplikasi.

Contoh tabel:

- users
- pasien
- dokter
- kunjungan
- obat

(Sesuaikan dengan tabel yang kamu buat)

---

## 📊 Fitur Sistem

- Login Admin
- Manajemen Data
- Penyimpanan Database
- Dashboard Admin
- Integrasi Metabase untuk visualisasi data

---

## 👨‍🎓 Tujuan Project

Project ini dibuat sebagai implementasi materi:

- Perancangan database
- Relasi tabel
- Pengelolaan data
- Implementasi database dalam aplikasi

---

## 👤 Author

**Ahmad Firdaus**  
Mahasiswa Universitas Esa Unggul  
Mata Kuliah Basis Data 2026

---

## ✅ Status Project

Project UAS – Selesai dan dapat dijalankan dengan Docker.
