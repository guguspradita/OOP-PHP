<?php 

class IlkomBarang {
    public $namaToko = "Ilkom Store";
    public function __set($name, $value)
    {
        $this->$name = strtoupper($value);
    }
}

// koneksi kedatabase ilkom
$pdo = new PDO("mysql:host=localhost;dbname=ilkom", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// proses query
$query = "SELECT * FROM barang";
$stmt = $pdo->query($query);

$arr = $stmt->fetchAll(PDO::FETCH_CLASS, "ilkomBarang");

echo "<pre>";
    print_r($arr);
echo "</pre>";