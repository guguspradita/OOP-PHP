<?php 
class SepedaMotor {
    private $merek;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }

    public function getInfo(){
        return "Sepeda Motor " . $this->merek;
    }
}
?>