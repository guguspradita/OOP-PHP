<?php 

$foo = [
    'nama_barang' => 'Msi Modern 14 AMD Ryzen 5-5500',
    'jumlah_barang' => 10,
    'harga_barang' => 9900000
];

$dataKeys = array_keys($foo);
$dataValues = array_values($foo);

print_r($dataKeys);
echo "<br>";
print_r($dataValues);