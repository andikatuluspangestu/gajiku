# Gajiku - Sistem Informasi Gaji Karyawan

Merupakan aplikasi yang dibuat untuk memenuhi tugas akhir mata kuliah Pemrograman Web 2. Aplikasi ini dibuat menggunakan framework Laravel 8 dan Bootstrap 4.3.1.

### Quick Start

1. Clone repository ini
2. Buat database baru dengan nama `gajiku_db`
3. Run `composer update`
4. Run `php artisan migrate`
5. Run `php artisan db:seed`
6. Run `php artisan serve`
7. Selesai

### Troubleshooting

Jika terjadi error saat menjalankan `php artisan migrate`, coba jalankan `php artisan migrate:fresh` atau `php artisan migrate:refresh` untuk menghapus tabel yang sudah ada dan membuat ulang.

Jika terjadi error setelah merubah route maka jalankan `php artisan route:cache` lalu `php artisan route:clear` dan terakhir `php artisan config:cache`


