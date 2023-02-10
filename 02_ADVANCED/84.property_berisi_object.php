<?php 
class Perusahaan {
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
}

class Laptop {
    public $merek;
    public $suplier;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }
}

$suplierLaptop = new Perusahaan("CV. Sinar Samudra");
$produk1 = new Laptop('Asus');
$produk1->suplier = $suplierLaptop;

echo $produk1->suplier->nama;
// cara mengakses property $name dari object $produk01

echo "<pre>";
print_r($produk1);
echo "</pre>";
?>