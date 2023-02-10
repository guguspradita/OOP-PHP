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

    private $_columnName = "*";
    private $_orderBy = "";

    // Constructor untuk pembuatan PDO Object
    private function __construct()
    {
        try {
            $this->_PDO = new PDO("mysql:host=$this->_host;dbname=$this->_dbname",
                                    $this->_username, $this->_pass);
            $this->_PDO->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
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

    // method ini hanya berfungsi untuk menjalankan query saja
    public function runQuery($query, $bindValue = []){
        try {
            // proses query
            $stmt = $this->_PDO->prepare($query); // proses menghasilkan PDOStatement object
            // proses bind dan execute
            $stmt->execute($bindValue);
        } catch (Exception $e){
            die ("Query / Koneksi bermasalah: " . $e->getMessage() . " (" . $e->getCode() . ")");
        }
        return $stmt; 
    }

    // method ini digunakan untuk mengembalikan data tabel dalam bentuk array object
    public function getQuery($query, $bindValue = []) {
        // mengembalikan query select
        return $this->runQuery($query, $bindValue)->fetchAll(PDO::FETCH_OBJ);
    }

    // method untuk menentukan kolom mana saja yang diambil
    public function select($colomnName) {
        // jika method select() tidak dipanggil, artinya tampilkan seluruh kolom.
        $this->_columnName = $colomnName;
        return $this;
    }

    // method untuk mengatur urutan baris tampilan tabel.
    public function orderBy($colomnName, $sortType = 'ASC') {
        $this->_orderBy = "ORDER BY {$colomnName} {$sortType}";
        return $this;
    }

    // method untuk mengambil semua isi dari sebuah tabel.
    public function get($namaTabel, $condition = "", $bindValue = []) {
        $query = "SELECT {$this->_columnName} FROM {$namaTabel} {$condition} {$this->_orderBy}";
        // dipakai untuk me-reset ulang isi property $_columnName agar kembali menjadi '*'.
        $this->_columnName = "*"; 
        $this->_orderBy = "";
        return $this->getQuery($query, $bindValue);
    } 

    public function getWhere ($namaTabel, $condition) {
        $queryCondition = "WHERE {$condition[0]} {$condition[1]} ? ";
        return $this->get($namaTabel, $queryCondition, [$condition[2]]);
    } 

}  