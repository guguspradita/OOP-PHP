<?php 
// null coalescing operator bisa dipakai untuk memeriksa apakah sebuah variabel berisi nilai atau tidak:
// echo $produk ?? $smartphone ?? "Laptop"; // Laptop
// Salah satu kekurangan null coalescing operator adalah tidak bisa dipakai untuk hasil pemanggilan method.

class Perusahaanne {
    public function __construct(private $nama, protected $kota) // constructor property promotion-> mempersingkat proses inisialisasi property
    {

    }

    public function getInfo(){
        return "$this->nama dari kota $this->kota";
    }
}

class Produkke {
    public ?Perusahaanne $suplier;

    public function __construct($suplier)
    {
        $this->suplier = $suplier;
    }
}

$perusahaan1 = new Perusahaanne("CV. Sinar Samudra", "Surabaya");
$produk1 = new Produkke($perusahaan1);

echo $produk1->suplier->getInfo();  // CV. Sinar Samudra dari kota Surabaya
?>