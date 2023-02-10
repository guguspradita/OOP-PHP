<?php 

function foo($a){
    if ($a == 0){
        throw new Exception("Argument tidak boleh diisi nol.");
    } else if ($a < 0) {
        throw new Exception("Argument tidak boleh diisi negatif.");
    } else {
        return 1 / $a;
    }
}  

echo "Sebelum Try... <br>";

try {
    echo foo(-10) . "<br>";
} catch (Exception $e) {
    echo "Terjadi error pada baris ke-" . $e->getTrace()[0]['line'] . " dengan keterangan <b>" . $e->getMessage() . "</b> <br>";
} finally {
    echo "Di dalam finally... <br>";
}

echo "Setelah try...";