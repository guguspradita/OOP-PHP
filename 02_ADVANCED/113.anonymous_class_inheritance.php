<?php 
class Produknya {
    protected string $merek;

    public function __construct($foo)
    {
        $this->merek = $foo;
    }
}

interface PunyaMerek {
    public function getMerek();
}

$produk1 = new class("Hitachi") extends Produknya implements PunyaMerek {
    public function getMerek()
    {
        return $this->merek;
    }
};

echo $produk1->getMerek();  // Hitachi
?>