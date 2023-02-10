<?php 
class DisplayDatabase{
    private $column;
    private $table;
    private $conditional;

    public function select ($column) {
        $this->column = $column;
        return $this;
    }

    public function from ($table) {
        $this->table = $table;
        return $this;
    }

    public function where ($conditional) {
        $this->conditional = $conditional;
        return $this;
    }

    public function getQuery() {
        return "SELECT " . $this->column . " FROM " . $this->table . " WHERE " . $this->conditional ;
    }
}

$mahasiswa1 = new DisplayDatabase();
echo $mahasiswa1->select("nim, nama")->from("mahasiswa")->where("nim = '1462000035'")->getQuery();

?>