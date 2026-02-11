# Laravel 8 Template

Template dasar Laravel 8 untuk memulai project baru.

## Langkah awal

1. Copy environment file:
   ```bash
   cp .env.example .env
   ```
2. Install dependency:
   ```bash
   composer install
   ```
3. Generate app key:
   ```bash
   php artisan key:generate
   ```
4. Jalankan server lokal:
   ```bash
   php artisan serve
   ```

## Compress agar bisa di-download

Bisa. Untuk membuat file ZIP project (tanpa `.git`, `vendor`, `node_modules`), jalankan:

```bash
./scripts/package-template.sh
```

Atau dengan nama file custom:

```bash
./scripts/package-template.sh nama-file-anda.zip
```

Setelah itu file ZIP akan muncul di root project dan bisa langsung di-download.

> Catatan: Pada environment ini akses ke Packagist dibatasi, jadi dependency mungkin tidak bisa diunduh sampai jaringan/proxy diizinkan.
