<?php 
class Smartphone {
    public $merek;
    public $tipe;
    public $harga;

    public function __construct($merek, $tipe, $harga)
    {
        $this->merek = $merek;
        $this->tipe = $tipe;
        $this->harga = $harga;
    }
}

class Televisi {
    public $merek; 
    public $tipe; 
    public $harga; 

    public function __construct($merek, $tipe, $harga)
    {
        $this->merek = $merek;
        $this->tipe = $tipe;
        $this->harga = $harga;
    }
}

// fungsi tampilkanSmartphone() hanya boleh diisi dengan argument yang merupakan hasil instansiasi class Smartphone.
function tampilkanSmartphone(Smartphone $hp){
    return "Smartphone". $hp->merek . " " . $hp->tipe . " di jual seharga Rp. " . number_format($hp->harga, 2, ",", ".");
}

$produk1 = new Televisi("Samsung", "LED TV 40 inch UA40M5000", 4499000);
$produk2 = new Smartphone("Samsung", "GAlaxy S9+", 11999000);

echo tampilkanSmartphone($produk1);
echo "<br>";
echo tampilkanSmartphone($produk2);

// Fatal error: Uncaught TypeError: Argument 1 passed to tampilkanSmartphone() must be an instance of Smartphone, instance of Televisi given
?>