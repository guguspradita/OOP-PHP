<?php 
// Autoloading untuk mengimport file secara otomatis.
/* Syarat AutoLoading :
1. Autoloading baru dijalankan ketika sebuah class yang belum tersedia, dipanggil dalam kode program
2. Nama file yang di import harus sama dengan nama class
3. jika menggunakan namespace, struktur folder harus mengikuti penulisan namespace
*/

// Untuk membuat autoloading, kita memakai fungsi spl_autoload_register().
spl_autoload_register('cekClass');

function cekClass($foo) {
    echo "required '$foo.php';";
}

$produk1 = new Mobil();
// $produk2 = new SepedaMotor();

?>