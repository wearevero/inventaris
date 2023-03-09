<p align="center"><a href="https://github.com/yuxxeun/jasmine" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Latar Belakang

Program ini dibuat untuk bersenang senang (dibaca: eksperiment) dengan _cutting edge_ teknologi yang sedang populer pada saat ini (2022 - 2023), _becasuse why not?_

Becanda, projek ini dibuat untuk memudahkan manajemen semua barang inventaris yang dimiliki PT. Veronique Indonesia.

Dalam program ini, terdapat fitur _tracking_ barang yang dapat digunakan untuk melakukan pencarian & melihat detail barang.

## Requirement

Untuk dapat menjalankan di _development mode_, diperlukan beberapa syarat, seperti:

1. _Package manager_ alias `composer` yang bisa di-unduh [disini](https://getcomposer.org)
2. Sebuah web server seperti ehm... `xampp` -jika menggunakan _windows_-
3. `PHP` dengan versi `8.^`
4. dan `node js` untuk menjalankan `asset` yang berkaitan dengan project ini.

## Development

1. _Clone repository_
2. Buka `bash` dan ketik perintah `composer install`, `npm install`
3. Jika sudah, ketik `php artisan key:generate`
4. Migrasi semua table yang ada dengan perintah: `php artisan migrate`
5. Seed semua data yang dibutuhkan dengan perintah `php artisan db:seed`
6. Jika kelima langkah di atas dirasa sudah dilakukan, jalankan project dengan perintah `php artisan serve` & `npm run dev`
7. Buka peramban (dibaca: _browser_) dengan port `:8000` i.e: `127.0.0.1:8000`

## License

Inventaris is mini open-source software licensed under the [MIT license](./LICENSE).
