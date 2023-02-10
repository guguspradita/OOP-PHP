<?php 
class Produku {}

interface Smartelektroniku{
    public function cekOS();
}

trait lowWattku{
    public function efisiensi(){
        return "Konsumsi daya 0.8";
    }
}

class Televisiku extends Produku implements Smartelektroniku{
    use lowWattku;
    public function cekOS()
    {
        return "android 9.0 (pie)";
    }
}

$produk1 = new Televisiku();

var_dump($produk1 instanceof Produku). "<br>";
var_dump($produk1 instanceof Televisiku). "<br>";
var_dump($produk1 instanceof Smartelektroniku). "<br>";
var_dump($produk1 instanceof lowWattku). "<br>";
var_dump($produk1 instanceof Smartphone). "<br>";

// bool(true) 
// bool(true) 
// bool(true) 
// bool(false) 
// bool(false) 
?>