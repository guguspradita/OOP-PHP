<?php 

interface ProdukEksporLuar {
    function cekHargaUSD();
    function cekNegara();
    public const biayaPajak = 0.5;
}

echo ProdukEksporLuar::biayaPajak;
echo PHP_EOL;