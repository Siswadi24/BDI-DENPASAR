<?php
include("typedata.php");

$mahasiswa = new Mahasiswa();

$mahasiswa->setName("dana");
echo $mahasiswa->getName();