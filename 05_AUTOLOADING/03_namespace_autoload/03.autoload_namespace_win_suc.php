<?php 
spl_autoload_register(function ($className) {
    $filePath = "$className.php";
    echo $filePath;
    echo PHP_EOL;
    require $filePath;
});

$produk1 = new \Programmer\Library\Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;

?>