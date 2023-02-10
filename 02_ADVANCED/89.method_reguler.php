<?php 
/*
Method chaining adalah istilah untuk menyebut penulisan method yang bisa disambung atau dirangkai satu sama lain, karena itu disebut dengan chaining (rantai).
*/

class Televisi {
    private $merek;
    private $jenisLayar;
    private $ukuranLayar;

    public function setMerek($merek){
        $this->merek = $merek;
    }
    public function setJenisLayar($jenisLayar){
        $this->jenisLayar = $jenisLayar;
    }
    public function setUkuranLayar($ukuranLayar){
        $this->ukuranLayar = $ukuranLayar;
    }

    public function cekInfo(){
        return "Televisi ".$this->jenisLayar." ".$this->merek. " ". $this->ukuranLayar." Inch";
    }
}

$produk1 = new Televisi();
$produk1->setMerek("Samsung");
$produk1->setJenisLayar("LED");
$produk1->setUkuranLayar(42);

echo $produk1->cekInfo();
echo PHP_EOL;

// Prinsip kerja dari method chaining adalah, di dalam method kita harus mengembalikan object saat ini, yakni variabel $this.
?>