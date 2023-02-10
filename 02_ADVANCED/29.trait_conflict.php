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
    use SmartElektronik; // bengong endi sg diceluk, method e jenenge podo
    use LowWatt; // bengong endi sg diceluk, method e jenenge podo
}

$produk1 = new SmartTV();
// echo $produk1->efisiensi(); jika ini di panggil akan error
// Fatal error: Trait method efisiensi has not been applied, because there are
// collisions with other trait methods on SmartTV