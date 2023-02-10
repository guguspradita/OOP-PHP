<?php 
// Autoloading untuk mengimport file secara otomatis.
/* Syarat AutoLoading :
1. Autoloading baru dijalankan ketika sebuah class yang belum tersedia, dipanggil dalam kode program
2. Nama file yang di import harus sama dengan nama class
3. jika menggunakan namespace, struktur folder harus mengikuti penulisan namespace
*/

// Untuk membuat autoloading, kita memakai fungsi spl_autoload_register().
spl_autoload_register('cekClass');

function cekClass($foo){
    echo "Nama Class yang dicari adalah: ".$foo;
    echo PHP_EOL;
}

$produk01 = new Mobil(); // error, karena memanggil nama class yang tidak terdefinisikan
// $produk02 = new SepedaMotor(); // error, karena memanggil nama class yang tidak terdefinisikan
?>