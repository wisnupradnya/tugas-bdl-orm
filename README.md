# Tugas BDL ORM

Nama : I Made Wisnu Pradnya Yoga | NIM : 2301020010

Aplikasi Tugas Basis Data Lanjut (BDL) yang menggunakan Laravel Eloquent ORM untuk manajemen data.

## Prerequisite

Pastikan terinstall di local machine:

-   PHP ^8.2
-   Composer
-   Node JS & NPM
-   Database (MySQL)

## 1. Clone Repository

```bash
git clone https://github.com/wisnupradnya/tugas-bdl-orm.git
cd tugas-bdl-orm
```

## 2. Install Dependensi

```bash
composer install   # install PHP dependencies
npm install       # install Node.js dependencies
npm run build       # compile assets dengan Vite
```

## 3. Konfigurasi Environment

```bash
cp .env.example .env
php artisan key:generate
```

Edit file `.env` sesuaikan koneksi database:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

## 4. Migrasi dan Seed Database

```bash
php artisan migrate
php artisan db:seed
```

## 5. Jalankan Server Lokal

```bash
php artisan serve
```

Akses aplikasi di `http://127.0.0.1:8000`.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
