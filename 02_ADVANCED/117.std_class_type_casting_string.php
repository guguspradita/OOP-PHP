<?php 
$foo = "BELAJAR OOP PHP";
$bar = (object) $foo;

var_dump($bar);
// object(stdClass)#1 (1) { ["scalar"]=> string(15) "Belajar OOP PHP" }
?>