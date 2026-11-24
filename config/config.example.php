<?php
// ============================================================
// TEMPLATE KONFIGURASI SITAS
// Salin file ini menjadi config.php, lalu sesuaikan nilai lokal.
// ============================================================

define('APP_NAME', 'SITAS');
define('APP_FULL_NAME', 'Sistem Informasi Tugas Akhir dan Skripsi');

// Nama folder proyek di dalam htdocs (XAMPP).
define('BASE_URL', '/sitas');

// Tampilkan panel akun demo pada halaman login.
define('APP_DEBUG', true);

// Koneksi database lokal.
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'sitas_db');
define('DB_USER', 'root');
define('DB_PASS', '');

// Aturan bisnis aplikasi.
define('AMBANG_KEMIRIPAN', 60);
define('KUOTA_PEMBIMBING', 10);
define('MIN_BIMBINGAN', 8);
define('MAKS_UKURAN_UPLOAD', 5 * 1024 * 1024);

// Tahap pengembangan yang sudah selesai.
define('TAHAP_SELESAI', 9);

date_default_timezone_set('Asia/Jakarta');
