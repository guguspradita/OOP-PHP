<?php 
spl_autoload_register(function ($className) {
    $filePath1 = "Library/$className.php";
    if (file_exists($filePath1)){
        require $filePath1;
    }

    $filepath2 = "Plugin/$className.php";
    if (file_exists($filepath2)){
        require $filepath2;
    }
});

$produk1 = new Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;

$produk01 = new SepedaMotor("Yamaha");
echo $produk01->getInfo();
echo PHP_EOL;
?>