<?php 
// DSN = Data Source Name
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=ilkom;charset=utf8mb4", "root", "");
var_dump($pdo);