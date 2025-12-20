# INVENTARUS - Sistem Inventaris Usaha

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white)

**Inventarus** adalah aplikasi manajemen inventaris berbasis web yang dirancang untuk membantu pelaku usaha kecil hingga menengah dalam mengelola aset mereka secara digital. Nama "Inventarus" sendiri merupakan gabungan dari **"Inventaris"** dan **"Arus"**, yang melambangkan fokus aplikasi pada pencatatan alur keluar-masuk barang yang akurat.

**Inventarus** dirancang dengan arsitektur **Multi-Tenant**. Aplikasi ini memungkinkan banyak pengguna untuk mendaftar dan mengelola gudang mereka masing-masing secara terisolasi dalam satu sistem database yang sama.

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

### Menggunakan Docker(Rekomendasi)
Prasyarat: Pastikan Docker Dekstop sudah berjalan

#### 1. Install Dependencies
Jika di laptop Anda sudah ada PHP & Composer, cukup jalankan:
`composer install`
Jika belum ada PHP, gunakan perintah Docker ini untuk instalasi awal:
```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
```

#### 2. Setup Environment
`cp .env.example .env`

#### 3. Jalankan Aplikasi
`./vendor/bin/sail up -d`

#### 4. Setup Akhir
```bash
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan migrate:fresh --seed
./vendor/bin/sail npm install && ./vendor/bin/sail npm run build
```

#### 5. Menghentikan Aplikasi
`./vendor/bin/sail down`

### Untuk Selebihnya Panduan Instalasi Silahkan Bisa Akses Link di Bawah 
[Panduan Instalasi](https://docs.google.com/document/d/1CmNxC70ouxP4KVcZwg4VP9Qi2ZyxyFY7CM1zXmzEDbs/edit?usp=sharing)