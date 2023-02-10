<?php
class Smartphonene {
    public ?int $merek;
    // jika sebuah property boleh diisi dengan nilai null, tambah satu karakter tanda tanya "?"
}
$produk01 = new Smartphonene();
$produk01->merek = null;
var_dump($produk01->merek); // NULL   

// property $merek hanya bisa menerima tipe data integer atau nilai null.