# 📦 INVENTARUS - Sistem Inventaris Usaha (Multi-User)

![Laravel](https://laravel.com/)
![TailwindCSS](https://tailwindcss.com/)
![SQLite](https://sqlite.org/)

**Inventarus** adalah aplikasi berbasis web untuk manajemen stok barang yang dirancang dengan arsitektur **Multi-Tenant (SaaS-lite)**. Aplikasi ini memungkinkan banyak pengguna (usaha) untuk mendaftar dan mengelola gudang mereka masing-masing secara terisolasi dalam satu sistem database yang sama.

---

## 🚀 Fitur Utama

Aplikasi ini tidak hanya sekadar mencatat barang, tetapi memiliki logika bisnis yang lengkap:

### 1. 🔐 Multi-User Data Isolation
Setiap pengguna memiliki "Gudang Pribadi". Data barang, kategori, dan transaksi milik User A **tidak akan pernah bocor** atau terlihat oleh User B. Keamanan data terjamin menggunakan *User Scope Filtering* di level Controller.

### 2. 📊 Dashboard Interaktif
Menampilkan ringkasan statistik secara *real-time*:
- Total Jenis Barang & Total Aset Fisik.
- Peringatan Dini (**Early Warning System**) untuk stok menipis (< 5 unit).
- Grafik/List aktivitas transaksi terakhir.

### 3. 📦 Manajemen Stok (CRUD Lengkap)
- Tambah, Edit, dan Hapus Barang.
- Validasi data yang ketat (Stok tidak boleh minus, harga harus angka).
- Pencatatan otomatis ID pemilik barang.

### 4. 📝 Pencatatan Transaksi (Log History)
Setiap perubahan stok tercatat rapi:
- **Barang Masuk (Restock):** Menambah stok.
- **Barang Keluar (Terjual):** Mengurangi stok.
- **Peminjaman (Loan):** Mencatat siapa yang meminjam aset.

### 5. 📂 Pengelompokan Kategori
Manajemen kategori dinamis untuk mengelompokkan jenis barang agar lebih terorganisir.

---

## 🛠️ Teknologi yang Digunakan

- **Backend:** Laravel 12 (12.42.0) (PHP Framework)
- **Frontend:** Blade Templating + Tailwind CSS
- **UI Components:** Flowbite, HyperUI, Font Awesome
- **Database:** SQLite (Portable & Ringan)
- **Authentication:** Laravel Breeze (Secure Login/Register)
- **Server Environment:** Nginx (via Laragon)

---

## 💻 Persyaratan Sistem (Prerequisites)

Sebelum menjalankan aplikasi, pastikan komputer Anda sudah terinstal:

1.  **PHP** (Minimal versi 8.1).
2.  **Composer** (Untuk install library PHP).
3.  **Node.js & NPM** (Untuk compile aset Tailwind CSS).
4.  **Git** (Untuk clone repository).

---

## ⚙️ Panduan Instalasi (Langkah demi Langkah)

### Untuk Panduan Instalasi Silahkan Bisa Akses Link di Bawah 
[Panduan Instalasi](https://docs.google.com/document/d/1CmNxC70ouxP4KVcZwg4VP9Qi2ZyxyFY7CM1zXmzEDbs/edit?usp=sharing)