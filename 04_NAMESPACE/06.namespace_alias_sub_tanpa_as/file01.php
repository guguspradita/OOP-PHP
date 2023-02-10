<?php 
include ('file03.php');

use Laptop\Gaming\ROG\Laptopanya;

// pemanggilan class secara tidak langsung memanggil namespace Laptop\Gaming\ROG\Laptopanya
$gaming = new Laptopanya();
echo $gaming->merek; // ASUS ROG
echo PHP_EOL;

?>