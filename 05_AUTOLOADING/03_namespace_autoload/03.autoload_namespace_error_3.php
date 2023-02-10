<?php 
spl_autoload_register(function ($className) {
    echo $className;
});

$produk1 = new \Programmer\Library\Mobil("Toyota");
echo $produk1->getInfo();
echo PHP_EOL;

// Programmer/Library/Programmer\Library\Mobil.php
// PHP Warning:  require(Programmer/Library/Programmer\Library\Mobil.php): Failed to open stream: No such file or directory
// Error di atas terjadi karena Penyebab dari error ini bisa dilihat pada hasil di baris pertama, yakni Programmer/Library/Programmer\Library\Mobil.php
?>