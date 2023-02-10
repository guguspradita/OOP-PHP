<?php 
// Trait merupakan solusi PHP untuk mengatasi batasan multiple inheritance.

class Televisi {
    public function cekResolusi() {
        return "Full HD";
    }
}

trait SmartElectronic {
    public function cekOS(){
        return "Android 9 (Pie)";
    }
}

class SmartTV extends Televisi {
    use SmartElectronic;
    public function cekInfo(){
        return "Smart TV " . $this->cekResolusi() . " - " .$this->cekOS() . PHP_EOL;
    }
}

$produk1 = new SmartTV();
echo $produk1->cekInfo();