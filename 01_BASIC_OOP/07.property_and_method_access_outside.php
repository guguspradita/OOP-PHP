<?php 
class Desain {
    public $nama_gambar = "Arduino";
    public $ukuran = "30cm";
    public $harga = 20000;

    public function pesanGambar(){
        return "Gambar dipesan ...";
    }
}

$rumah = new Desain(); // Instansiasi object
echo $rumah->nama_gambar = "Desain Minimalis";  // Desain Minimalis
echo "<br>";
echo $rumah->ukuran = "50 x 50"; // 50 x 50
echo "<br>";
echo $rumah->harga = 1000000000; // 10000000000
echo "<br>";

?>