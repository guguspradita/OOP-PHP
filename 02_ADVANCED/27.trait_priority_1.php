<?php 

class Televisi {
    public function efisiensi()
    {
        return "Konsumsi daya 1.0" . PHP_EOL;
    }
}

trait LowWatt {
    public function efisiensi()
    {
        return "Konsumsi 0.8" . PHP_EOL;
    }
}

class SmartTv extends Televisi {
    use LowWatt;
}

$produk1 = new SmartTv();
echo $produk1->efisiensi(); // konsumsi 0.8 -> method dari trait

/*
Urutan Priority trait 
1. Method di dalam class itu sendiri.
2. Method milik trait.
3. Method milik parent class.
*/