<?php 
// namespace import atau alias dipakai untuk menyingkat penulisan sebuah kelas

include ('file02.php');
include ('file03.php');

// keyword use dipakai untuk mengimport namespace, yang diikuti keyword as untuk membuat alias.
use Laptop\Asus as Asus;
use Laptop\Gaming\ROG as LaptopGaming;

$asus = new Asus\Laptopanya(); // membuat objek dari namespace Asus
echo $asus->merek; // Asus
echo PHP_EOL;

$gaming = new LaptopGaming\Laptopanya();    // membuat objek dari namespace LaptopGaming
echo $gaming->merek; // ASUS ROG
echo PHP_EOL;
?>