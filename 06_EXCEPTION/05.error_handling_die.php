<?php 

function foo($a){
    if ($a == 0 ) {
        die ("Error: Argument \$a tidak bisa diisi dengan 0");
    } elseif($a < 0) {
        die ("Error: Argument \$a tidak bisa diisi dengan negatif");
    }
    else {
        return 1/$a;
    }
}

echo foo(2); echo "<br>";
echo foo(-4); echo "<br>";
echo foo(0); echo "<br>";
echo foo(23); echo "<br>";