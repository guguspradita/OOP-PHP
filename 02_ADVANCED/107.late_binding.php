<?php 
// late binding atau runtime binding, PHP harus menunggu object apa yang memanggil untuk bisa menentukan hasil akhir.


declare(strict_types=1);

class Produknya {
    protected string $merek = "LG";

    public function cekMerek(){
        return "Produk dengan merek $this->merek tersedia";
    }

    public function getMerek(){
        return $this->cekMerek();
    }

    // Proses late binding terjadi di sini, dimana PHP harus melihat object apa yang menjalankan method getInfo() untuk bisa memproses hasil akhir. Variabel $this dari pemanggilan $this->cekMerek() ditentukan di akhir pemanggilan.
}

class MesinCucinya extends Produknya {
    public function cekMerek(){
        return "Mesin Cuci dengan merek $this->merek tersedia";
    }
}

$produk1 = new Produknya();
echo $produk1->getMerek();  // Produk dengan merek LG tersedia
echo "<br>";

$produk2 = new MesinCucinya();
echo $produk2->getMerek();  // Mesin Cuci dengan merek LG tersedia

?>