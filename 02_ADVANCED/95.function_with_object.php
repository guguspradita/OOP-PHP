<?php 
class Smartphone1 {
    public $merek;
    public $tipe;
    public $harga;

    public function __construct($merek, $tipe, $harga)
    {   
        $this->merek = $merek;
        $this->tipe = $tipe;
        $this->harga = $harga;
    }
}

function tampilkanSmartphone($hp) {
    return "Smartphone ".$hp->merek." ".$hp->tipe." di jual seharga Rp. ".number_format($hp->harga,2,",",".");
}

$produk1 = new Smartphone1("Xiaomi","Redmi Note 10", 2799000);
$produk2 = new Smartphone1("Samsung","Galaxy S9+", 11999000);
$produk3 = new Smartphone1("Apple","iPhone X", 15700000);

echo tampilkanSmartphone($produk1);
echo "<br>";
echo tampilkanSmartphone($produk2);
echo "<br>";
echo tampilkanSmartphone($produk3);
echo "<br>";

/*
fungsi tampilkanSmartphone() dipakai untuk menampilkan ketiga property yang ada di dalam class Smartphone. Fungsi tampilkanSmartphone() butuh 1 parameter: $hp. Parameter $hp ini nantinya harus diisi dengan object dari class Smartphone.

saya menginstansiasi 3 buah object dari class Smartphone, yakni $produk1, $produk2, dan $produk3. Ketiganya diisi dengan nilai yang berlainan. Kemudian di baris 23 –
27 ketiga object diinput ke dalam fungsi tampilkanSmartphone(). Hasilnya berupa string yang berasal dari setiap object.
*/
?>