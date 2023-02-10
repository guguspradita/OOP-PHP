<?php 
$tgl1 = new DateTime('17 Aug 1945');
$tgl2 = new DateTime('17 Aug 2023');

var_dump($tgl1 < $tgl2); echo "<br>";
var_dump($tgl1 > $tgl2); echo "<br>";
var_dump($tgl1 == $tgl2); echo "<br>";