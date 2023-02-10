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
        // memanggil constructor parent -> menggunakan keyword parent
        parent::__construct($jenis, $merek, $stok);
        $this->ukuranLayar = $ukuranLayar;  // menambahkan object ukuranLayar pada class Laptop
    }
}


$laptop = new Laptop ("Laptop", "MSI", 20, "14 Inch");

echo "<pre>";
print_r($laptop);
echo "</pre>";

?>