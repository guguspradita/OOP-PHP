<?php 
spl_autoload_register('cekClass');

function cekClass($foo){
    require "$foo.php";
}

$produk01 = new Mobil("Sedan");
echo $produk01->getInfo();
echo PHP_EOL;

$produk02 = new SepedaMotor("Megapro Primus");
echo $produk02->getInfo();
echo PHP_EOL;
?>