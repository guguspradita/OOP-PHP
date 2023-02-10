<?php 
/*
Yang sering dilakukan adalah, men-set semua property sebagai private kemudian membuat
method untuk mengakses nilai dari property tersebut.
*/

class Produk {
    private $merek; // tidak bisa di akses diluar class

    public function setMerek($merek){
        $this->merek = $merek;
    }

    public function getMerek(){
        return $this->merek;
    }
}

$produk1 = new Produk();
$produk1->setMerek("Lenovo");
echo $produk1->getMerek();  // Lenovo
echo "<br>";

$produk2 = new Produk();
$produk2->setMerek("MSI");
echo $produk2->getMerek();  // MSI
?>