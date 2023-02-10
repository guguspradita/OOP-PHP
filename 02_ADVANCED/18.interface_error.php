<?php 

interface ProdukEkspor {
    public function cekHargaUSD();
    public function cekNegara();
}

/* class MesinCuci implements ProdukEkspor {
    // Fatal error: Class MesinCuci contains 2 abstract methods and must therefore be
    declared abstract or implement the remaining methods (ProdukEkspor::cekHargaUsd,
    ProdukEkspor::cekNegara)
// } */