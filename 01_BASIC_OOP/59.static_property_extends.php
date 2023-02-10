<?php 
class Produk {
    public static $merk = "samsung";
}

class Laptop extends Produk {

}

echo Laptop::$merk;
?>