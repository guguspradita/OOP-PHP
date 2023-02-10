<?php 
trait SmartElektronik {
    public function efisiensi()
    {
        return "Konsumsi daya 1.1" . PHP_EOL;
    }
}

trait LowWatt {
    public function efisiensi()
    {
        return "Konsumsi daya 0.8" . PHP_EOL;
    }
}

class SmartTV {
    use SmartElektronik , LowWatt {
        SmartElektronik::efisiensi insteadof LowWatt;
        LowWatt::efisiensi as efisiensiLow; 
        // memberi nama baru (alias) dari method efisiensi trait LowWatt 
        // agar bisa dipanggil di objek
    }
}

$produk1 = new SmartTV();
echo $produk1->efisiensi(); // Konsumsi daya 1.1
echo $produk1->efisiensiLow(); // konsumsi daya 0.8