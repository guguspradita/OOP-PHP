<?php 
class Produk {
    private $merek = "";
    private $stok = 0;

    private function setMerek($merek){
        // cek apakah inputan string
        if (is_string($merek)){
            $this->merek = $merek;
        } 
        else {
            die ("Error: merek harus String <br>");
        }
    }

    private function setStok($stok){
        // cek apakah inputan int(bil bulat)
        if (is_int($stok)){
            $this->stok = $stok;
        } 
        else {
            die("Error: stok harus bilangan bulat <br>");
        }
    }

    public function __construct($merek, $stok)
    {
        $this->setMerek($merek);
        $this->setStok($stok);
    }

    public function getMerek(){
        return strtoupper($this->merek);
    }

    public function getStok(){
        return $this->stok;
    }
}

$produk1 = new Produk("Acer", 10);
echo "Stok Produk " .$produk1->getMerek() . " : " . $produk1->getStok();
echo "<br>";
?>