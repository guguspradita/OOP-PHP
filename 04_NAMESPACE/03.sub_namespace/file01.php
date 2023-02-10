<?php 
// Sub-namespace adalah istilah untuk menyebut nama namaspace yang "berjenjang".

include('file02.php');
include('file03.php');

$laptop = new Laptop\asus\Laptopanya();  // namespace Laptop\asus artinya kita menempatkan seluruh file di dalam folder asus yang berada di dalam folder Laptop.
$gaming = new Laptop\Gaming\ROG\Laptopanya(); // PHP tidak membatasi "seberapa dalam" struktur namespace, namun kedalaman 1 - 3 sub- namespace sudah cukup untuk kebanyakan project.
echo $laptop->merek; // Asus
echo PHP_EOL;

echo $gaming->merek; // ASUS ROG
echo PHP_EOL;
?>