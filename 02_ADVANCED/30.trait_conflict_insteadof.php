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
        // memberi tahu yg dipangggil method efisiensi -> SmartElektronik
    }
}

$produk1 = new SmartTV();
echo $produk1->efisiensi(); // Konsumsi daya 1.1

/*
    SmartElectronic::efisiensi insteadof LowWatt . Perintah ini adalah informasi kepada PHP
    bahwa jika di dalam class SmartTV dipanggil method efisiensi(), method dari trait
    SmartElectronic-lah yang akan dipakai.

    Jika anda ingin sebaliknya, yakni method efisiensi() milik trait LowWatt yang akan dipakai,
    maka perintahnya menjadi LowWatt::efisiensi insteadof SmartElectronic .
*/