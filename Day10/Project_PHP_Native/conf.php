<?php

// Inisialisasi variabel koneksi
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'reservasi');

// Proses koneksi ke database
$koneksi= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//Cek Koneksi
if ($koneksi === false) {
    die("Error: tidak bisa konek ". mysqli_connect_error());
}
?>