<?php
class Smartphonene {
    public ?Perusahaan $suplier;
    // jika sebuah property boleh diisi dengan nilai null, tambah satu karakter tanda tanya "?"
}
$produk01 = new Smartphonene();
$produk01->suplier = null;
var_dump($produk01->suplier); // NULL   