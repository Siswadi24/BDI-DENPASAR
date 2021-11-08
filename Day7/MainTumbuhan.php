<?php

include ("Tumbuhan.php");

$HidupTumbuhan = new Tumbuhan();

$HidupTumbuhan->setdaun("Menyirip");
$HidupTumbuhan->setbatang("Dikotil");
$HidupTumbuhan->setAkar("Tunggang");
$HidupTumbuhan->setbuah("Enak");

print_r($HidupTumbuhan);//Outputnya akan mengambil isi yang ada divariabel class Tumbuhan yang berbentuk object
print_r($HidupTumbuhan->getData());//Hanya akan mengambil yang ada didalam getData() yang hasil outputnya akan berbentuk array
