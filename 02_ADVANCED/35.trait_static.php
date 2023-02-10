<?php 

// Trait Static Property dan Static Method

trait SmartElektronik {
    public static $internet = "Indihome";

    public static function cekOS()
    {
        return "Android 9 (Pie)" . PHP_EOL;
    }
}

class SmartTv {
    use SmartElektronik;
}

echo SmartElektronik::$internet . PHP_EOL;  // Indihome
echo SmartElektronik::cekOS(); // Android 9 (Pie)