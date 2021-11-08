<?php

include("Tumbuhan.php");

$Htumb = new Tumbuhan();

$Htumb-> setJenis("Tumbuhan alga");
$Htumb -> setjenisAkar("Serabut");
$Htumb -> setjenisDaun("Menyirip");
$Htumb-> getData();
print_r($Htumb);
echo "<br>";
print_r($Htumb-> getData());