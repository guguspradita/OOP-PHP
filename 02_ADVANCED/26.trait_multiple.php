<?php 
// Sebuah class juga bisa menggunakan lebih dari 1 trait

trait SmartElectronic {
    public function cekOS(){
        return "Android 9 (Pie)";
    }
}

trait LowWatt {
    public function efisiensi(){
        return "Komsumsi daya 0.8";
    }
}

class SmartTV {
    use SmartElectronic, LowWatt;
    public function cekInfo(){
        return "Smart TV " . $this->cekOS() . " - " . $this->efisiensi() . PHP_EOL;
    }
}

$produk1 = new SmartTV();
echo $produk1->cekInfo();