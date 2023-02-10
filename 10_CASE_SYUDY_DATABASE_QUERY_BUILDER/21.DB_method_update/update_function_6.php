<?php 

update('user', 
    [ "username" => "Gugus Pradita",
    "email" => "guguspradita19@gmail.com",
    "umur" => "23 Tahun",
    "sekolah" => "untag",
    "alamat" => "wiyung"
    ], 
    ["id_user" , "=", "7"]);

function update ($tableName, $data, $condition){
    $query = "UPDATE {$tableName} SET ";
    foreach($data as $key => $val){
        $query .= "$key = ?, ";
    }
    $query = substr($query, 0, -2);
    $query .= " WHERE {$condition[0]} {$condition[1]} ?";

    $dataValues = array_values($data);
    array_push($dataValues, $condition[2]);

    echo $query;
    echo "<pre>";
    print_r($dataValues);
    echo "</pre>";
}