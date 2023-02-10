<?php 
// Type hinting adalah fitur PHP untuk membatasi jenis tipe data parameter yang bisa diterima oleh sebuah function atau method.

// Dengan type hinting, kita bisa membuat semacam aturan tambahan untuk parameter fungsi
function hitungRata2(array $data){
    return ($data[0] + $data[1] + $data[2])/3;
}

// argument harus array jika tidak akan 0
echo hitungRata2(5,5,20); // error

// Fatal error: Uncaught TypeError: Argument 1 passed to hitungRata2() must be of the type array, integer given
?>