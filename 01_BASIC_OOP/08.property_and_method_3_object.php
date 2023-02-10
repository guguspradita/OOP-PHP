<?php 
class Produk {
    public $sku = "000";
    public $merek = "";
    public $harga = 0;

    public function pesanProduk(){
        return "Produk dipesan...";
    }
}

$televisi = new Produk(); // instance object
$televisi->sku = "001";
$televisi->merek = "LG";
$televisi->harga = 300000;

$laptop = new Produk(); // instance object
$laptop->sku = "020";
$laptop->merek = "Msi";
$laptop->harga = 10000000;

$speaker = new Produk(); // instance object
$speaker->sku = "300";
$speaker->merek = "JBL";
$speaker->harga = 500000;

print_r($televisi); // menampilkan array object
echo "<br>";
print_r($laptop); // menampilkan array object
echo "<br>";
print_r($speaker); // menampilkan array object
echo "<br>";



?>