<?php 
declare(strict_types=1);    // ini dipakai agar PHP masukke strict mode. Jika ditulis seperti ini, barulah scalar type hinting menampilkan pesan error.

class Perusahaannee{}

class Laptopkuu{
    public Perusahaanne $suplier; // Typed Properties -> membatasi tipe data property
}

$suplier01 = new Perusahaannee();
$produk01 = new Laptopkuu();
$produk01->suplier = $suplier01;
?>