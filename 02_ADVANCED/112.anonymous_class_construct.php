<?php 
// anonymous class dengan constructor

declare(strict_types=1);    // masuk PHP mode strict

$produk1 = new class ("Sony"){
    private String $merek;

    public function __construct(String $foo)
    {
        $this->merek = $foo;
    }

    public function getMerek(){
        return $this->merek;
    }
};

echo $produk1->getMerek();  // Sony

?>