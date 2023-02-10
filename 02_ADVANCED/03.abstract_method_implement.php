<?php 

// Abstract method cukup ditulis signature-nya saja, yakni nama method serta parameter

abstract class Produk {
    abstract public function cekHarga();
    // {
    //     // Fatal error: Abstract function Produk::cekHarga() cannot contain body
    // }
}