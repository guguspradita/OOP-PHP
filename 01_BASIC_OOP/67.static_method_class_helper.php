<?php 
class ProdukHelper {
    public static function cekValidSku($sku){
        return preg_match("/^[A-Z]{3}[0-9]{3}$/", $sku);
    }

    public static function cekValidMerek($merek){
        $semuaMerek = ["Samsung", "LG", "Sony", "Philips", "Sharp", "Sanken"];
        return in_array($merek, $semuaMerek);
    }
}

if (ProdukHelper::cekValidSKU("AAA545")) {
echo "SKU AAA545 valid <br>";
}
if (ProdukHelper::cekValidSKU("AAa545")) {
echo "SKU AAa545 valid <br>";
}
if (ProdukHelper::cekValidMerek("Sharp")) {
echo "Merek Sharp tersedia <br>";
}
if (ProdukHelper::cekValidMerek("Samsung")) {
echo "Merek Samsung tersedia <br>";
}
if (ProdukHelper::cekValidMerek("Asus")) {
echo "Merek Asus tersedia <br>";
}