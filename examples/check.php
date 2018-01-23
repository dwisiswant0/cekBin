<?php
require_once(dirname(__DIR__) . "/vendor/autoload.php");

$bin = "444444"; // first six digits of a credit card
$cekBin = new \dwisiswant0\cekBin();
$check = $cekBin->check($bin);
var_dump($check);
?>