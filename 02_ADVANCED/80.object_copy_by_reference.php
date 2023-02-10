<?php 
// operator assignment " = " akan menjadi copy by reference
class Laptop {
    private $merek;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }

    public function cekMerek(){
        return $this->merek;
    }

    public function setMerek($merek){
        $this->merek = $merek;
    }
}

$produk1 = new Laptop('Asus');
$produk2 = $produk1;

echo $produk1->cekMerek().PHP_EOL;  // Asus
echo $produk2->cekMerek().PHP_EOL;  // Asus

$produk2->setMerek('Dell').PHP_EOL;

echo $produk1->cekMerek().PHP_EOL;  // Dell
echo $produk2->cekMerek().PHP_EOL;  // Dell

// Hal ini bisa terjadi karena operasi di baris 21, yakni perintah $produk02 = $produk01 adalah copy by reference. akan men-copy alamat memory (reference) dari object $produk01 ke dalam variabel $produk02. Artinya kedua variabel akan merujuk ke object Laptop yang sama.
?>