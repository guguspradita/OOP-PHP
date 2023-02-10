<?php 
// anonymous class -> class tanpa nama, untuk membuatnnya dengan new class(){};
$produk1 = new class(){
    private string $merek = "Polytron";
    public function getMerek(){
        return $this->merek;
    }
};

echo $produk1->getMerek();  // Polytron

echo $produk1->merek;   // Fatal error:  Uncaught Error: Cannot access private property class@anonymous::$merek 
?>