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
        $this->merek = $merek;
        $this->jenis = $jenis;
        $this->stok = $stok;
    }
}

$produk1 = new Televisi("Samsung", "Televisi", 100); // agar solving, class child mendefinisikan constructor ulang yang ada pada constructor parent.

// TAPI INI TIDAK EFISIEN, karena terdapat duplikasi kode program.

echo "<pre>";
print_r($produk1);
echo "</pre>";
?>