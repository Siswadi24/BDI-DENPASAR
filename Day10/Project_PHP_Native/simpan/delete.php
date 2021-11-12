<?php
require_once('../conf.php');

//tangkap input dari user
$id = $_GET['id'];
$costumerID = $_POST['costumerID'];
$Email = $_POST['Email'];
$noHP = $_POST['noHP'];
$adress = $_POST['adress'];

//siapkan query
$query = "DELETE FROM pelanggan WHERE costumer_id='$id'";

//Jalankan Query
if ($query = mysqli_query($koneksi, $query)) {
    # code...
    header('location: ../index.php?status=success');
} else {
    # code...
    header('location: ../index.php?status=error');
}