<?php 

echo "Kode ini berada di file: " . __FILE__ . PHP_EOL ;
echo "Yang berada di dalam folder: " .__DIR__ . PHP_EOL ;
echo "Perintah ini berasal dari baris: " . __LINE__ . PHP_EOL;
echo "Menggunakan Sistem Operasi: " . PHP_OS . PHP_EOL;

function belajar_magic_constant()
{
    return "Kode ini berasal di dalam fungsi: " . __FUNCTION__ . PHP_EOL;
}

echo belajar_magic_constant();