<?php

use NegatifException as GlobalNegatifException;

class NolException extends Exception{}
class NegatifException extends Exception{}

set_exception_handler(function ($e) {
    echo "Terjadi error pada baris ke-" . $e->getTrace()[0]['line'] . " dengan keterangan <b>" . $e->getMessage() . "</b> <br>";
});

function foo($a){
    if ($a == 0){
        throw new NolException("Argument tidak boleh diisi nol.");
    } else if ($a < 0) {
        throw new NegatifException("Argument tidak boleh diisi negatif.");
    } else if (!is_numeric($a)) {
        throw new Exception("Argument yang diinput bukan angka");
    } else {
        return 1 / $a;
    }
}  

try {
    echo foo('X') . "<br>";
} catch (NolException $e) {
   echo $e->getMessage();
}

try {
    echo foo(-100) . "<br>";
} catch (NegatifException $e) {
    echo $e->getMessage();
}
