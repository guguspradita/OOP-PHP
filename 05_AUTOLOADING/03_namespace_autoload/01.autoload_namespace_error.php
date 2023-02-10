<?php 
spl_autoload_register(function ($className) {
    $filePath = "Programmer/Library/$className.php";
    echo $filePath;
    echo PHP_EOL;
    require $filePath;
});

$produk1 = new Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;
// Programmer/Library/Mobil.php
// PHP Fatal error:  Uncaught Error: Class "Mobil" not found
// Error di atas terjadi karena penggunaan namespace.
?>