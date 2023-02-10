<?php 
namespace Elektronik\Komputer;

class Produk {
    private $merek;
    public function __construct($merek)
    {
        $this->merek = $merek;
    }

    public function getInfo(){
        return "Laptop " . $this->merek . " Harga: RP. 599.000";
    }
}
