<?php 

function foo($a){
    if ($a === 0){
        //  pembuatan pesan error dengan throw new Exception
        throw new Exception("Argument \$a tidak boleh diisi 0");
    } else {
        return 1/$a;
    }
}

echo foo(2); echo "<br>";
echo foo(-4); echo "<br>";
echo foo(0); echo "<br>";
echo foo(23); echo "<br>";