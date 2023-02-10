<?php 
class Produk{
    public $jenis; // property dalam class
    public $merek; // property dalam class
    public $stok; // property dalam class

    public function tambahStok($jumlah = 12){
        $totalStok = $this->stok + $jumlah;
        if ($totalStok <= 100){
            $this->stok = $totalStok;
            $pesan = "Stok berhasil ditambah <br>";
            $pesan .= "Jumlah stok saat ini: ". $this->stok . "<br>";
        } else {
            $pesan = "Maaf, stok sudah penuh. Penambahan stok dibatalkan <br>";
            $pesan .= "Jumlah stok saat ini " . $this->stok . "<br>";
        }
        return $pesan;
    }
}


$produk1 = new Produk();
$produk1->jenis = "Laptop";
$produk1->merek = "MSI";
$produk1->stok = 50;

echo $produk1->tambahStok(); // menambah default argument 12
echo "<br>";
echo $produk1->tambahStok(20); // menambah object->stok = 20
echo "<br>";
echo $produk1->tambahStok(40); // menambah object->stok = 20, dan menmpilkan pesan gagal menambah stok
echo "<br>";


?>