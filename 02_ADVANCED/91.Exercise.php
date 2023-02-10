<?php 
class Database {
    private $query;
    public function select($column){
        $this->query = "SELECT $column ";
        return $this;
    }
    public function from($table){
        $this->query .= "FROM $table ";
        return $this;
    }
    public function where($conditional){
        $this->query .= "WHERE $conditional";
        return $this;
    }
    public function getQuery(){
        return $this->query;
    }
}

$mahasiswa = new Database();
$mahasiswa->select("nim, nama")->from("mahasiswa")->where("nim='1462000035'");
echo $mahasiswa->getQuery();
// SELECT nim, nama FROM mahasiswa WHERE nim='1462000035'

?>