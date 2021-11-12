<?php
require_once('../conf.php');

//tangkap input dari user
$id = $_GET['id'];
$costumerID = $_POST['costumerID'];
$Email = $_POST['Email'];
$noHP = $_POST['noHP'];
$adress = $_POST['adress'];

//siapkan query
$query = "UPDATE pelanggan set costumer_id = '$costumerID', Email_pelanggan = '$Email', notelepon_pelanggan = '$noHP', Alamat_pelanggan = '$adress' WHERE costumer_id = '$id'";

//Jalankan Query
if ($query = mysqli_query($koneksi, $query)) {
    # code...
    header('location: ../index.php?status=success');
} else {
    # code...
    header('location: ../index.php?status=error');
}
?>
