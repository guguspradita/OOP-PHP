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

    public function __destruct()
    {
        unset($this->jenis, $this->merek, $this->stok);
        echo "Property class Produk sudah dihapus ... <br>";
    }
}

class Televisi extends Produk {
    public $ukuranLayar;

    public function __construct($jenis, $merek, $stok, $ukuranLayar)
    {
        $this->ukuranLayar = $ukuranLayar;
        parent::__construct($jenis, $merek, $stok);
    }

    public function __destruct()
    {
        unset($this->ukuranLayar);
        echo "Property class Televisi sudah dihapus ... <br>";
        parent::__destruct();
    }
}

$produk1 = new Televisi ("Televisi", "Samsung", 100, 32);

echo "<pre>";
print_r($produk1);
echo "</pre>";

?>