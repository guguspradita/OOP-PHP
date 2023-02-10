<?php 
// early binding adalah sebutan bahwa PHP sudah mengetahui apa yang harus dilakukan di awal (pada saat proses compile).

declare(strict_types=1);

class Produknya {
    protected string $merek = "LG";

    public function cekMerek(){
        return "Produk dengan merek $this->merek tersedia";
    }
}

class MesinCucinya extends Produknya {
    public function cekMerek(){
        return "Mesin Cuci dengan merek $this->merek tersedia";
    }
}

$produk1 = new Produknya();
echo $produk1->cekMerek();  // Produk dengan merek LG tersedia
echo "<br>";

$produk2 = new MesinCucinya();
echo $produk2->cekMerek();  // Mesin Cuci dengan merek LG tersedia

?>