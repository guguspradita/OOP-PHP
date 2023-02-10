<?php 

trait SmartElektronik {
    public function cekOS()
    {
        return "Android 9 (Pie)";
    }
}

trait LowWatt {
    use SmartELektronik; // trait di dalam trait
    public function efisiensi()
    {
        return $this->cekOS(). " Konsumsi daya 0.8" . PHP_EOL;
    }
}

class SmartTv {
    use LowWatt;
}

$produk1 = new SmartTv();
echo $produk1->efisiensi(); // Android 9 (Pie) Konsumsi daya 0.8