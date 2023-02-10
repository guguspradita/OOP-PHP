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
        return $this;
        // mengembalikan object saat ini (variabel $this), pemanggilan method bisa disambung menjadi 1 perintah yang panjang.
    }
    public function setJenisLayar($jenisLayar){
        $this->jenisLayar = $jenisLayar;
        return $this;
        // mengembalikan object saat ini (variabel $this), pemanggilan method bisa disambung menjadi 1 perintah yang panjang.
    }
    public function setUkuranLayar($ukuranLayar){
        $this->ukuranLayar = $ukuranLayar;
        return $this;
        // mengembalikan object saat ini (variabel $this), pemanggilan method bisa disambung menjadi 1 perintah yang panjang.
    }

    public function cekInfo(){
        return "Televisi ".$this->jenisLayar." ".$this->merek. " ". $this->ukuranLayar." Inch";
    }
}

$produk1 = new Televisi();

echo $produk1->setMerek("LG")->setJenisLayar("LCD")->setUkuranLayar("42")->cekInfo();

echo "<br>";
echo PHP_EOL;

echo $produk1->setMerek("samsung")
    ->setJenisLayar("LED")
    ->setUkuranLayar("42")
    ->cekInfo();
echo "<br>";
echo PHP_EOL;

// Prinsip kerja dari method chaining adalah, di dalam method kita harus mengembalikan object saat ini, yakni variabel $this.
?>