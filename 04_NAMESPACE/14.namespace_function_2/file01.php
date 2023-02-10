<?php 
namespace Elektronik;

use DateTime;

$waktu = new DateTime();
echo $waktu->format('d-m-Y H:i:s');
echo PHP_EOL;
echo date('d-m-Y H:i:s');
echo PHP_EOL;

?>