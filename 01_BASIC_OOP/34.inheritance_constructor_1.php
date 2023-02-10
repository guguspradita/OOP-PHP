<?php 
//  constructor adalah method khusus yang secara otomatis berjalan pada saat instansiasi object

class Produk {
    public string $merek;
    public string $jenis;
    public int $stok;

    public function __construct($merek, $jenis, $stok)
    {
        $this->merek = $merek;
        $this->jenis = $jenis;
        $this->stok = $stok;
    }
}

$laptop = new Produk("MSI", "Laptop", 10);
$hp = new Produk("Samsung", "Hp", 40);

echo "<pre>";
print_r($laptop);
print_r($hp);
echo "</pre>";

?>