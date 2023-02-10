<?php 
$foo = "BELAJAR OOP PHP";
// konversi string ke object
$bar = (object) $foo;

echo $bar->scalar;  // BELAJAR OOP PHP
?>