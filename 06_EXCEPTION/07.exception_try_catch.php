<?php 
// Struktur try catch
/* try {
    // kode program yang akan menghasilkan exception
    throw new Exception ("pesan kesalahan")
  }
     catch (Exception $e) {
    // kode program yang akan memproses exception
  }
*/

function foo ($a) {
    if ($a === 0) {
        throw new Exception("Argument \$a tidak boleh diisi 0");
    } else {
        return 1/$a;
    }
}

try {
    echo Foo(0);
} catch (Exception $e) {
    echo $e->getMessage(); // menampilkan pesan error dari throw
}