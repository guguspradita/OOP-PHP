<?php 
/*
    Interface adalah sebuah mekanisme di dalam OOP PHP untuk membuat ‘kontrak’ atau
    perjanjian implementasi method.
*/

// Interface dibuat menggunakan keyword interface
interface ProdukEkspor{
    public function cekHargaUSD();
    public function cekNegara();
}

// menggunakan interface, tambahkan keyword implements setelah nama class
class Televisi implements ProdukEkspor {
    public function cekHargaUSD()
    {
        return 185;
    }

    public function cekNegara()
    {
        return ["Singapura", "Malaysia", "Jepang", "China"];
    }
}

$produk1 = new Televisi();
echo $produk1->cekHargaUSD();
echo PHP_EOL;
echo implode(", ", $produk1->cekNegara());
echo PHP_EOL;