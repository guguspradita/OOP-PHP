<?php 
// Trait Abstract Method

trait SmartPhone {
    public function cekOS()
    {
        return "Android 9 (Pie)" . PHP_EOL;
    }

    abstract public function cekProsessor(); // memaksa class turunan agar mendeklarasi ulang method
}

class SmartTv {
    use SmartPhone;

    public function cekProsessor()  // mendeklarasikan ulang method abstract
    {
        return "Snapdragon 845" . PHP_EOL;
    }
}

$produk1 = new SmartTv();
echo $produk1->cekOS(); // Android 9 (Pie)
echo $produk1->cekProsessor();  // Snapdragon 845