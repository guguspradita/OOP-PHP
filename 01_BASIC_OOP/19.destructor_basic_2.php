<?php 

class Produk {
    public function __construct()
    {
        echo "Constructor dijalankan ... <br>";
    }

    public function __destruct()
    {
        echo "Destructor dijalankan ... <br>";
    }
}

$produk1 = new Produk();
$produk1 = null;

echo "Program selesai <br>";

?>