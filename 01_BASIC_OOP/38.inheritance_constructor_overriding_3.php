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
    public function __construct($merek, $jenis, $stok) 
    {
        // memanggil constructor Produk
        parent::__construct($merek, $jenis, $stok);
    }
}

class TelevisiLCD extends Televisi {
    public function __construct($merek, $jenis, $stok)
    {
        parent::__construct($merek, $jenis, $stok);
    }
}

$produk1 = new Televisi("Samsung", "Televisi", 100); 
$produk2 = new TelevisiLCD("Samsung LCD", "Televisi", 40); 

echo "<pre>";
print_r($produk1);
print_r($produk2);
echo "</pre>";
?>