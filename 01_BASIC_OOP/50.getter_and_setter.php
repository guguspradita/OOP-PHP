<?php 
class Produk {
    private $merek;
    private $stok;

    public function setMerek($merek){
        $this->merek = $merek;
    }
    public function setStok($stok){
        $this->stok = $stok;
    }

    public function getMerek(){
        return $this->merek;
    }
    public function getStok(){
        return $this->stok;
    }
}

$produk1 = new Produk();
$produk1->setMerek("Acer");
$produk1->setStok(10);

echo $produk1->getMerek();  // acer
echo "<br>";    
echo $produk1->getStok();   // 10
?>