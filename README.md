# Portofolio Praktikum Pengujian dan Pemeliharaan Perangkat Lunak

Repositori pribadi untuk praktikum mata kuliah Pengujian dan Pemeliharaan Perangkat Lunak, Program Studi D4 Rekayasa Perangkat Lunak, Politeknik Negeri Bengkalis.

## Identitas

- **Nama:** Nur Kamilah
- **NIM:** 6304240031
- **Kelas:** RPL 5B

## Topik Praktikum

Pengenalan unit testing dengan PHPUnit 11 (PHP 8.2), mencakup:

- Praktikum 1-4: instalasi PHPUnit, test pertama (Greeter), beberapa assertion (Email), dan data provider
- Latihan 1-2: data provider untuk Email dan analisis bug pada Greeter
- Tugas mandiri: class KonversiSuhu beserta test-nya

## Struktur Folder

- `src/` : class yang diuji (Greeter, Email, KonversiSuhu)
- `tests/` : file test PHPUnit
- `phpunit.xml` : konfigurasi PHPUnit
- `composer.json` : konfigurasi Composer dan autoload

## Cara Menjalankan

    composer install
    vendor/bin/phpunit