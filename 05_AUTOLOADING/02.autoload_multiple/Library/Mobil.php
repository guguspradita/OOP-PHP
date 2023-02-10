<?php 
class Mobil{
    private $merek;

    public function __construct($merek)
    {
        $this->merek = $merek;
    }

    public function getInfo(){
        return "Mobil : " . $this->merek;
    }
}

?>