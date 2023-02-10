<?php 
// Trait Access Modifier

trait SmartElektronik {
    public function cekOS()
    {
        return "Android 9 (pie)" . PHP_EOL;
    }
}

class SmartTv {
    use SmartELektronik { cekOS as protected; } // menggubah public ke protected
}

$produk1 = new SmartTv();
echo $produk1->cekOS(); // tidak bisa diakses karena protected