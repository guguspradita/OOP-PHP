<?php 
class Produk {
    public $merek;
    public $jenis;
    public $stok;

    public function __construct($merek, $jenis, $stok)
    {
        $this->merek = $merek;
        $this->jenis = $jenis;
        $this->stok = $stok;
    }
}

class Televisi extends Produk {
    public function __construct()   // constructor child class akan mengambil alih constructor parent class.
    {
        
    }
}

$produk1 = new Televisi("Samsung", "Televisi", 100); // tidak tampil, karena constructor overriding

echo "<pre>";
print_r($produk1);
echo "</pre>";
?>