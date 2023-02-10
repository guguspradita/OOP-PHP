<?php 

function foo($a) {
    if ($a == 0) {
        throw new Exception('Argument \$a tidak boleh diisi 0');
    } else {
        return 1/$a;
    }
}

try {
    foo(0);
} catch (Exception $e) {
    echo "Terjadi error dalam file <b>" . $e->getTrace()[0]['file'] . "</b> , dibaris ke-" . $e->getTrace()[0]['line'] . " dengan keterangan <b>" . $e->getMessage() . "</b>"; 
}