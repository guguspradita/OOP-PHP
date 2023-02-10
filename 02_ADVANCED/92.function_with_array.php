<?php 
// Type hinting adalah fitur PHP untuk membatasi jenis tipe data parameter yang bisa diterima oleh sebuah function atau method.

function hitungRata2($data){
    return ($data[0] + $data[1] + $data[2])/3;
}

// argument harus array 
echo hitungRata2([5,5,20]); // 10
?>