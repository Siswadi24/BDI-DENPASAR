<?php
require_once('../conf.php');

//tangkap inputan user
$costumerID = $_POST['costumerID'];
$Email = $_POST['Email'];
$noHP = $_POST['noHP'];
$adress = $_POST['adress'];

//siapkan query
$query = "INSERT INTO pelanggan (costumer_id,Email_pelanggan,notelepon_pelanggan,Alamat_pelanggan) VALUES ('$costumerID', '$Email', '$noHP', '$adress')";

//jalankan query
if ($query = mysqli_query($koneksi, $query)) {
    header('location: ../index.php?status=success');
} else {
    header('location: ../index.php?status=error');
}
