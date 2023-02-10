<?php 

insert('barang', [
    'nama_barang' => 'Msi Modern 14 AMD Ryzen 5-5500',
    'jumlah_barang' => 10,
    'harga_barang' => 9900000
]);

function insert($tableName, $data){
    $dataKeys = array_keys($data);
    $dataValues = array_values($data);
    $placeHolder =  '(' . str_repeat('?,', count($data)-1) .'?)';

    echo "INSERT INTO {$tableName} (" . implode(", ", $dataKeys) .") 
            VALUES {$placeHolder}";
}