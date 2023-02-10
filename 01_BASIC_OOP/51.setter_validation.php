<?php 
class Produk {
    private $stok = 0;

    public function setStok($stok){
        if(is_int($stok)){
            $this->stok = $stok;
        }
        else {
            echo "Error: stok harus bilangan bulat <br>";
        }
    }
    
    public function getStok(){
        return $this->stok;
    }
}

$produk1 = new Produk();
echo $produk1->getStok(); // 0
echo "<br>";

$produk1->setStok(10.5); // Error: stok harus bilangan bulat <br>
echo $produk1->getStok(); // 0
echo "<br>";

$produk1->setStok("sepuluh"); // Error: stok harus bilangan bulat <br>
echo $produk1->getStok(); // 0
echo "<br>";

$produk1->setStok(10); 
echo $produk1->getStok(); // 10
echo "<br>";
?>