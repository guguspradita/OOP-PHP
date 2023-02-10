<?php 

interface ProdukEkspor {
    public function cekHargaUSD();
    public function cekNegara();
}

interface ProdukMakanan {
    public function cekExpired();
}

interface ProdukMakananBeku {
    public function cekSuhuMin();
}

class Nugget implements ProdukEkspor, ProdukMakanan, ProdukMakananBeku {
    public function cekHargaUSD()
    {
        return 7.5;
    }

    public function cekNegara()
    {
        return ["Singapura", "Jepang", "China"];
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
echo PHP_EOL;
