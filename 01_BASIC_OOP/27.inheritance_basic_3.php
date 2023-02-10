<?php 
class produk {
    // property
    public $merek = "Sharp";
    public $stok = 50;

    // method
    public function cekStok(){
        return "Sisa stok: " . $this->stok;
    }
}

class Televisi extends Produk {
    // property
    public $jenis = "Televisi";

    // method
    public function cekStokTelevisi(){
        return "Jenis: " . $this->jenis . ", " . "Merek: ". $this->merek . ", " . $this->cekStok();
    }
}

class TelevisiLCD extends Televisi {
    // property
    public $tipe = "LCD";

    // method
    public function cekStokTelevisiLCD()
    {
        return "Tipe: " . $this->tipe. " ". $this->cekStokTelevisi();
    }
}

$produk1 = new TelevisiLCD();
echo $produk1->merek;       // Sharp
echo "<br>";
echo $produk1->jenis;       // Televisi
echo "<br>";
echo $produk1->cekStokTelevisiLCD(); // Tipe: LCD Jenis: Televisi, Merek: Sharp, Sisa stok: 50 

?>