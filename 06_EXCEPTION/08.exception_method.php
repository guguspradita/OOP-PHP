<?php 

function foo ($a) {
    if ($a === 0) {
        throw new Exception("Argument \$a tidak boleh diisi 0");
    } else {
        return 1/$a;
    }
}

try {
    echo foo(0);
} catch (Exception $e) {
    echo $e->getMessage() . "<br>"; // menampilkan pesan error
    echo $e->getCode() . "<br>"; // menampilkan error yang ditulis sebagai argument kedua
    echo $e->getFile() . "<br>"; // menampikan alamat path serta nama file
    echo $e->getLine() . "<br>"; // menampilkan baris tempat exception "dilempar"
    echo $e->getTraceAsString() . "<br>"; // menampilkan trace error dalam bentuk string
    
    echo "<pre>";
    print_r( $e->getTrace() ); // menampilkan error dalam bentuk array
    echo "</pre>";
}