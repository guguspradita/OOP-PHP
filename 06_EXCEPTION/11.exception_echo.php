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
    echo $e;
}