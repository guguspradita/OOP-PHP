<?php 
// Inheritance atau penurunan atau pewarisan adalah salah satu konsep utama dalam pemrograman berorientasi objek. 
// Dengan inheritance, kita bisa "menurunkan" isi dari sebuah class ke dalam class lain. Isi class yang dimaksud adalah property dan method.

class Produk {
    public $merek = "Samsung";
    public $stok = 100;

    public function cekStok(){
        return "Sisa stok: " . $this->stok;
    }
}


class Televisi extends Produk {
    // inheritance menggunakan keyword "extends".
    // mewarisi semua property dan method dari class induk
}

$produk1 = new Televisi();
echo $produk1->merek;   // Samsung
echo "<br>";
echo $produk1->cekStok();   // Sisa stok; 100
?>