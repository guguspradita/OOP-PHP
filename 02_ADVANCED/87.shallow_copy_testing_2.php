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
$produk1->suplier = $suplierLaptop;

$produk2 = clone $produk1;

$produk2->merek = "Apple";
$produk2->suplier->nama = "CV. Maju makmur";
echo "<pre>";
print_r($produk1);
echo "</pre>";

echo "<pre>";
print_r($produk2);
echo "</pre>";


// shallow copy. Secara default, ketika sebuah object di copy menggunakan perintah clone, PHP (dan mayoritas bahasa pemrograman object lain) akan men-copy nilai dari suatu property ke property lain. Tapi jika property tersebut merujuk ke object lain, maka yang di copy hanya referensinya saja.
?>