# DoD Projek

DoD atau singkatan dari Discovary of Depok merupkan sebuah aplikasi informasi wisata Depok yang dibangun menggunakan framework Laravel. Aplikasi ini dikembangkan sebagai bagian dari tugas projek pemrograman web. 

## Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan aplikasi ini:

1. Clone repositori dari GitHub:

   ```shell
   git clone https://github.com/abdullahalwafi/DoD-project.git
   ```

2. Pindah ke direktori projek:

   ```shell
   cd DoD-project
   ```

3. Instal semua dependensi menggunakan Composer:

   ```shell
   composer install
   ```

4. Salin file `.env.example` menjadi `.env`:

   ```shell
   cp .env.example .env
   ```

5. Generate kunci aplikasi:

   ```shell
   php artisan key:generate
   ```

6. Konfigurasi koneksi database pada file `.env` sesuai dengan lingkungan lokal Anda.

7. Migrasikan database:

   ```shell
   php artisan migrate:fresh --seed
   ```

8. Jalankan server pengembangan:

   ```shell
   php artisan serve
   ```

   Aplikasi akan diakses melalui URL [http://localhost:8000](http://localhost:8000).

## Fitur

Aplikasi ini memiliki beberapa fitur utama yang dibangun menggunakan berbagai komponen dan pustaka dalam ekosistem Laravel, antara lain:

- **Autentikasi Pengguna**: Pengguna dapat mendaftar, masuk, dan keluar dari aplikasi menggunakan fitur autentikasi Laravel.
- **Dashboard Admin**: Terdapat dashboard admin yang menyediakan fitur untuk mengelola data wisata seperti destinasi, ulasan, dan pengguna.
- **Manajemen Destinasi**: Admin dapat menambah, mengedit, dan menghapus destinasi wisata.
- **Ulasan/komentar**: Pengguna dapat memberikan ulasan dan rating untuk destinasi wisata.
- **Pencarian**: Terdapat fitur pencarian untuk mencari destinasi wisata berdasarkan nama atau kategori.
- **Halaman Landing**: Aplikasi menggunakan template Tourism Bali Template sebagai halaman landing yang menarik dan informatif.

Silahkan ikuti petunjuk instalasi di atas untuk menjalankan aplikasi ini secara lokal.