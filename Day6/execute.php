<?php
include("Latihan.php");

$Mahasiswa = new Mahasiswa();

$Mahasiswa->setNama("dana" . "danu");
echo $Mahasiswa->getName();
