<?php 
spl_autoload_register(function ($className) {
    $filePath = "Programmer/Library/$className.php";
    echo $filePath;
    echo PHP_EOL;
    require $filePath;
});

$produk1 = new \Programmer\Library\Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;

// Programmer/Library/Programmer\Library\Mobil.php
// PHP Warning:  require(Programmer/Library/Programmer\Library\Mobil.php): Failed to open stream: No such file or directory
// Error di atas terjadi karena Penyebab dari error ini bisa dilihat pada hasil di baris pertama, yakni Programmer/Library/Programmer\Library\Mobil.php
?>