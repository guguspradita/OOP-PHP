<?php 
class Perusahaan {
    private $namaPerusahaan;
    private $kotaPerusahaan;

    public function __construct($nama, $kota)
    {
        $this->namaPerusahaan = $nama;
        $this->kotaPerusahaan = $kota;
    }

    public function cekPerusahaan(){
        return $this->namaPerusahaan . " dari kota " . $this->kotaPerusahaan;
    }
}

class Smartphoneku {
    private $merek;
    private $suplier;

    public function __construct($merek, Perusahaan $suplier)
    {
        $this->merek = $merek;
        $this->suplier = $suplier;
    }

    public function cekSmartphoneku(){
        return "Smartphone " . $this->merek. " di supply oleh ". $this->suplier->cekPerusahaan();
    }
}

$suplier1 = new Perusahaan("CV. Sinar Samudra", "Surabaya");
$produk1 = new Smartphoneku("Samsung", $suplier1); // Jika argument kedua constructor bukan berisi object dari class Perusahaan, maka akan tampil pesan error.

echo $produk1->cekSmartphoneku();
// Smartphone Samsung di supply oleh CV. Sinar Samudra dari kota Surabaya
?>