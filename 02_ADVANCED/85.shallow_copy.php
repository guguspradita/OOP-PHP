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
$produk1 = new Laptop('Acer');
$produk1->suplier = $suplierLaptop; // mengisi properti dengan objek perusahaan

$produk2 = clone $produk1;

echo "<pre>";
print_r($produk1);
echo "</pre>";

echo "<pre>";
print_r($produk2);
echo "</pre>";

// Kedua variabel akan berisi object yang isinya sama persis. Istilah "sama persis" di sini bukan berarti "identik", karena baik object $produk01 dan $produk02 disimpan di ruang memory yang berbeda.
?>