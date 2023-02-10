<?php 

insert('user', [
    'nama' => 'Gugus',
    'alamat' => "Surabaya",
    'sekolah' => "UNTAG",
    'jurusan' => "Teknik Informatika"
]);

function insert($tableName, $data){
    $dataKeys = array_keys($data);
    $dataValues = array_values($data);
    $placeHolder =  '(' . str_repeat('?,', count($data)-1) .'?)';

    echo "INSERT INTO {$tableName} (" . implode(", ", $dataKeys) .") 
            VALUES {$placeHolder}";
    echo "<br>";
    print_r($dataValues);
    
}