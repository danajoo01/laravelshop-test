## Test Case: Full Stack

### Instalasi

Sebelum melakukan instalasi pastikan sudah terpasang `composer` dan `php`.

```php
// Setup library yang dibutuhkan
$ composer install

// Cek .env apakah ter create atau tidak, jika tidak jalankan langkah berikut 
$ cmd : copy .env.example .env

// Generate Key
$ php artisan key:generate

//Create database
setting database file -> .env 

// Setup Database
$ php artisan migrate --seed

// Menjalankan Aplikasi
$ php artisan serve

Jika menjalakan dilocal, sangat disarankan `enable fitur SSL pada webserver localhost` untuk mengaktifkan fitur kamera
dan mengunakan url HTTPS://localhost
```

### Akses Login

| Email                      | Password | Role   |
|----------------------------|----------|--------|
| admin@admin.com			 | admin123 | admin  |
| testa@example.com        	 | secret   | user   |
| testb@example.com          | secret   | user   |

### Screenshot

Berikut merupakan sedikit gambaran Test Case yang saya buat.

Halaman Utama:


Halaman Registrasi customer dilengkapi upload foto selfie. :


Halaman Admin:


Halaman Customer:


