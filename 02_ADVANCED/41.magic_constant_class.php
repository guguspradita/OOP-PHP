<?php 

trait HardCover {
    public function cekTrait()
    {
        $pesan = "Pesan ini berasal dari method: ". __METHOD__ . " " ;
        $pesan .= "di dalam trait: " . __TRAIT__;

        return $pesan;
    }
}

class Buku {
    use HardCover;

    public function cekClass()
    {
        $pesan = "Pesan ini berasal dari method: ". __METHOD__ . " ";
        $pesan .= "di dalam class: " . __CLASS__;

        return $pesan;
    }
}

$produk1 = new Buku();
echo $produk1->cekTrait();
echo PHP_EOL;
echo $produk1->cekClass();
echo PHP_EOL;
