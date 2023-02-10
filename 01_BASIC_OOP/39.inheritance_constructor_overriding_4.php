<?php 
class Produk {
    public $jenis;
    public $merek;
    public $stok;

    public function __construct($jenis, $merek, $stok)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
    }
}

class Laptop extends Produk {
    public $ukuranLayar;

    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
        $this->ukuranLayar = $ukuranLayar;
    }
}

$laptop = new Laptop("Laptop", "Msi",100,21);

echo "<pre>";
print_r($laptop);
echo "</pre>";
?>