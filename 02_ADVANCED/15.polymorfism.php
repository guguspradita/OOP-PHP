<?php 

// Polymorphism adalah konsep pemrograman object dimana sebuah method bisa memiliki
// nama yang sama, tapi penerapannya berbeda-beda tergantung object dari method tersebut.

abstract class Desain {
    abstract protected function cekModel();
}

class Rumah1 extends Desain {
    public function cekModel()
    {
        return "Model Rumah Sederhana Tipe 21";
    }
}

class Rumah2 extends Desain {
    public function cekModel()
    {
        return "Model Rumah Sederhana Tipe 30";
    }
}

class Rumah3 extends Desain {
    public function cekModel()
    {
        return "Model Rumah Sederhana Tipe 45";
    }
}

$rumah1 = new Rumah1();
$rumah2 = new Rumah2();
$rumah3 = new Rumah3();

echo $rumah1->cekModel() . PHP_EOL; // Model Rumah Sederhana Tipe 21
echo $rumah2->cekModel(). PHP_EOL; // Model Rumah Sederhana Tipe 30
echo $rumah3->cekModel(). PHP_EOL; // Model Rumah Sederhana Tipe 45