<?php 
class Produk {
    public static $total_produk = 100;

    public static function cekProduk(){
        return "Total Produk ada ". self::$total_produk;
    }
}

class Blender extends Produk{
    public function cekBlender(){
        return self::cekProduk() . ', termasuk 3 jenis Blender <br>';
    }
}

class HairDryer extends Produk {
    public function cekHairDryer(){
        return parent::cekProduk() . ', termasuk 5 jenis Hair Dryer <br>';
    }
}

class Mixer extends Produk {
    public function cekMixer(){
        return Produk::cekProduk() . ', termasuk 2 jenis Mixer <br>';
    }
}

$produk1 = new Blender();
echo $produk1->cekBlender();

$produk2 = new HairDryer();
echo $produk2->cekHairDryer();

$produk3 = new Mixer();
echo $produk3->cekMixer();