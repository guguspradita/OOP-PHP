<?php 
spl_autoload_register('importLibraryClass');
spl_autoload_register('importPluginClass');

function importLibraryClass($className){
    $filePath = "Library/$className.php";
    // cek apakah ada file path
    if (file_exists($filePath)){
        require $filePath;
    }
}

function importPluginClass($className){
    $filePath = "Plugin/$className.php";
    // cek apakah ada file path
    if(file_exists($filePath)){
        require $filePath;
    }
}

$produk1 = new Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;

$produk1 = new SepedaMotor("Yamaha");
echo $produk1->getInfo();
echo PHP_EOL;
?>