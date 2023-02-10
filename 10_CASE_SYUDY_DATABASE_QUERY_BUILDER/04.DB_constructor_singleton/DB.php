<?php 
// Langkah pertama dalam pembuatan sebuah library database adalah membuka koneksi ke
// database server,
class DB {
    // properti untuk koneksi ke database mysql
    private $_host = "127.0.0.1";
    private $_dbname = 'ilkom';
    private $_username = 'root';
    private $_pass = '';

    // Property internal dari class DB
    private static $_instance = NULL;
    private $_PDO;

    // Constructor untuk pembuatan PDO Object
    private function __construct()
    {
        try {
            $this->_PDO = new PDO("mysql:host=$this->_host;dbname=$this->_dbname",
                                    $this->_username, $this->_pass);
            $this->_PDO->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
            echo "Koneksi dibuat <br>";
        } catch (Exception $e){
            die ("Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")");
        }
    }

    // Singleton pattern untuk membuat class DB  
    public static function getInstance(){
        if (!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
}