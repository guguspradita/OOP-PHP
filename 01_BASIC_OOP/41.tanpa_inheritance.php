<?php 
class Televisi {
    public $jenis;
    public $merek;
    public $stok;
    public $ukuranLayar;

    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        $this->jenis = $jenis;
        $this->merek = $merek;
        $this->stok = $stok;
        $this->ukuranLayar = $ukuranLayar;
    }
}

$produk = new Televisi("Televisi", "Samsung", 10, 32);

echo "<pre>";
print_r($produk);
echo "</pre>";
?>