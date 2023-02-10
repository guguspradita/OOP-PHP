<?php 

class NolException extends Exception {
    public function pesanKesalahan() {
        return "Argument tidak boleh diisi dengan 0, dibaris " . $this->getTrace()[0]['line'] . "<br>";
    }
}

class NegatifException extends Exception {
    public function pesanKesalahan() {
        return "Argument tidak boleh diisi dengan negatif, dibaris " . $this->getTrace()[0]['line'] . "<br>";
    }
}

function foo($a) {
    if ($a == 0 ) {
        throw new NolException();
    } else if($a < 0) {
        throw new NegatifException();
    } else {
        return 1/$a;
    }
}

try {
    echo foo(0) . "<br>";
} catch (NolException $e) {
   echo $e->pesanKesalahan();
}

try {
    echo foo(-100) . "<br>";
} catch (NegatifException $e) {
    echo $e->pesanKesalahan();
}


echo "Selesai";