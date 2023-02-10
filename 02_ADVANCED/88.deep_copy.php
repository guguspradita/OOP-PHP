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

    public function __clone()
    {
        $this->suplier = clone $this->suplier; // mengcopy property yang berisi objek
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

// Prinsip dari deep copy adalah, jika terdapat property yang berisi object, maka pada saat proses clone, object tersebut juga harus di clone.

// Perintah $this->suplier = clone $this->suplier artinya saya ingin isi dari property suplier (yang berisi object) harus di clone terlebih dahulu, bukan sekedar copy by reference. 

// Sekarang, ketika $produk01 di copy ke $produk02 dengan perintah clone, property suplier akan berisi object $suplierLaptop yang berbeda. Perubahan di property name milik $object2 tidak lagi ikut mengubah isi property name milik $object1.
?>