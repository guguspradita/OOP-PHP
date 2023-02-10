<?php
class Smartphonekuu {
    public Perusahaan $suplier;
    // $suplier hanya bisa diisi dengan object dari class Perusahaan
}
$produk01 = new Smartphonekuu();
$produk01->suplier = "PT. ABC";
// Fatal error: Uncaught TypeError: Cannot assign int to property
// Smartphonekuu::$suplier of type Perusahaan