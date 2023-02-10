<?php 
class Produk {
    public $hargaUSD = 0;
    private const KURSUSD = 15000;

    public function hargaIDR(){
        return $this->hargaUSD * self::KURSUSD;
    }
}

$produk1 = new Produk();
$produk1->hargaUSD = 15;

echo $produk1->hargaIDR();  // 225000
echo PHP_EOL;