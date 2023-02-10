<?php 
// Prinsip penggunaan type hinting untuk object mirip seperti array. Bedanya, kita menulis nama class sebagai pengganti tipe data.
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

function tampilkanSmartphone($hp){
    return "Smartphone ". $hp->merek . " " . $hp->tipe . " di jual seharga Rp. " . number_format($hp->harga, 2, ",", ".");
}

$produk1 = new Televisi("Samsung", "LED TV 40 inch UA40M5000", 4499000);
$produk2 = new Smartphone("Samsung", "GAlaxy S9+", 11999000);

echo tampilkanSmartphone($produk1);
echo "<br>";
echo tampilkanSmartphone($produk2);


// Smartphone Samsung LED TV 40 inch UA40M5000 di jual seharga Rp. 4.499.000,00
// Smartphone Samsung Galaxy S9+ di jual seharga Rp. 11.999.000,00
?>