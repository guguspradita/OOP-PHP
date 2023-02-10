<?php 

update('barang', 
    [ "nama_barang" => "Smartphone Iphone XR",
    "harga_barang" => 17999000], 
    ["id_barang" , "=", "5"]);

function update ($tableName, $data, $condition){
    print_r($data);
    echo "<br>";
    print_r($condition);
}