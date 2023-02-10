<?php 

function foo($a) {
    if ($a == 0) {
        throw new Exception('Argument \$a tidak boleh diisi 0');
    } else {
        return 1/$a;
    }
}

function tampilException($e) {
    echo "Terjadi error dalam file <b>" . $e->getTrace()[0]['file'] . "</b> , dibaris ke-" . $e->getTrace()[0]['line'] . " dengan keterangan <b>" . $e->getMessage() . "</b><br>"; 
}

try {
    echo foo(2) . "<br>";
} catch (Exception $e) {
   echo tampilException($e);
}

try {
    echo foo(100) . "<br>";
} catch (Exception $e) {
    echo tampilException($e);
}

try {
    echo foo(0) . "<br>";
} catch (Exception $e) {
   echo tampilException($e); 
}

try {
    echo foo(-2) . "<br>";
} catch (Exception $e) {
   echo tampilException($e); 
}

echo "Selesai";