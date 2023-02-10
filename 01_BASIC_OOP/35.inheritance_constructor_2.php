<?php 
//  constructor adalah method khusus yang secara otomatis berjalan pada saat instansiasi object

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

}

$produk1 = new Televisi("Samsung", "Televisi", 100);

echo "<pre>";
print_r($produk1);
echo "</pre>";
?>