<?php 

trait SmartElektronik {
    public $internet = "Telkom Indihome";   

    public function cekOS()
    {
        return "Android 9 (Pie)" . PHP_EOL;
    }
}

class SmartTv {
    use SmartElektronik;
}

$produk1 = new SmartTv();
echo $produk1->internet . PHP_EOL;  // Telkom Indihome
echo $produk1->cekOS(); // Android 9 (Pie)