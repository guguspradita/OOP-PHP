<?php 
// perintah declare(strict_types=1), ini dipakai agar PHP masukke strict mode. 
// Jika ditulis seperti ini, barulah scalar type hinting menampilkan pesan error.

declare(strict_types=1); // masuk PHP strict mode -> agar menampilkan error

function tambah (int $a, int $b){
    return $a + $b;
}

echo tambah(5,6); // 11
echo "<br>";
echo tambah(10.3,5); // error
// Fatal error:  Uncaught TypeError: tambah(): Argument #1 ($a) must be of type int, float given,
echo "<br>";    
echo tambah("5", 12); // error
// PHP Fatal error:  Uncaught TypeError: tambah(): Argument #1 ($a) must be of type int, string given

?>