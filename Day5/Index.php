<?php
//Membuat Program Luas Persegi Panjang
$panjang = 3;
$lebar = 3;
$luas;

echo "<h3>Persegi Panjang</h3>";
$luas = $panjang * $lebar;
echo "Panjang   : " . $panjang;
echo "<br>";
echo "Lebar     : " . $lebar;
echo "<br>";
echo "Luas Persegi Panjang : " . " Panjang " . " * " . " Lebar" . " = " . $luas;



//Membuat Program Luas Segitiga
$alas = 20;
$tinggi = 6;

echo "<h3>Segitiga</h3>";
$luas = ($alas * $tinggi) / 2;
echo "alas : " . $alas;
echo "<br>";
echo "tinggi : " . $tinggi;
echo "<br>";
echo "Luas Segitiga : " . " (alas*tinggi)" . "/" . "2" . " = " . $luas;


//Membuat Program Keliling Lingkaran
$diameter = 6;
$keliling;

echo "<h3>Lingkaran</h3>";
$keliling = pi() * $diameter;
echo "pi : " . pi();
echo "<br>";
echo "diameter : " . $diameter;
echo "<br>";
echo "Keliling Lingkaran : " . " pi " . " * " . " d " . " = " . $keliling;
echo "<br>";

echo "<h3>Result Grade Value</h3>";
//Membuat Program Grade Nilai
$name = $_POST['name'];
$nilai = $_POST['nilai'];
echo "Halo " . $name;
echo " Nilai anda : " . $nilai;
echo "<br>";
if ($nilai >= 86 && $nilai <= 100) {
    echo "Anda mendapat nilai A";
} elseif ($nilai >= 76 and $nilai < 86) {
    echo "Anda mendapat nilai B";
} elseif ($nilai >= 51 and $nilai < 76) {
    echo "Anda mendapat nilai C";
} elseif ($nilai >= 31 and $nilai < 51) {
    echo "Anda mendapat nilai D";
} elseif ($nilai >= 0 and $nilai < 31) {
    echo "Anda mendapat nilai E";
} else {
    echo "Nilai tidak terdaftar";
}
