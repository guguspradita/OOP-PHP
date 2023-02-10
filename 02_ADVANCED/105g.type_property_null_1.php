<?php
class Smartphonene {
    public Perusahaan $suplier;
}
$produk01 = new Smartphonene();
$produk01->suplier = null;
// Fatal error: Uncaught TypeError: Cannot assign null to property
// Smartphonene::$suplier of type Perusahaan