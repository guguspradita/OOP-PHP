<?php 
class Produk {
    private $merek = "";

    public function setMerek($merek){
        // cek apakah inputan string
        if (is_string($merek)){
            $this->merek = $merek;
        }
        else {
            echo "Error: merek harus berbentuk string <br>";
        }
    }

    public function getMerek(){
        return strtoupper($this->merek);
    }
}

$produk1 = new Produk();
$produk1->setMerek(9); 
echo $produk1->getMerek(); // Error: merek harus berbentuk string <br>
echo "<br>";

$produk1->setMerek("acer");
echo $produk1->getMerek(); // ACER
?>