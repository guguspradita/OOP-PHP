<?php 
// variabel untuk menampung nilai PDO
$host = "127.0.0.1";
$port = "3306";
$db = "ilkom";
$charset = "utf8mb4";
$user = "root";
$pass = "";
$dsn = "mysql:localhost=$host;port=$port;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);