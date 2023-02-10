<?php 
// Interface juga bisa diturunkan ke dalam interface lain. menggunakan extends
interface ProdukEkspor {
    public function cekHargaUsd();
    public function cekNegara();
}

interface ProdukMakanan {
    public function cekExpired();
}

interface ProdukMakananBeku extends ProdukMakanan {
    public function cekSuhuMin();
}

class Nugget implements ProdukEkspor, ProdukMakananBeku {
    public function cekHargaUSD()
    {
        return 7.5;
    }

    public function cekNegara()
    {
        return ["Singapura", "Malaysia", "Jepang"];
    }

    public function cekExpired()
    {
        return "April 2023";
    }

    public function cekSuhuMin()
    {
        return -14;
    }
}

$produk1 = new Nugget();
echo $produk1->cekHargaUSD();
echo PHP_EOL;
echo implode(", " , $produk1->cekNegara());
echo PHP_EOL;
echo $produk1->cekExpired();
echo PHP_EOL;
echo $produk1->cekSuhuMin();