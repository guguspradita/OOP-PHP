<?php 
class Produknyaa {
    private $merek = "Asus";
    private $tipe = "Laptop";
    private $stok = 10;

    public function getInfo(){
        return $this->merek;
    }

    public function cekInfo(){
        return $this->merek . " " . $this->tipe . " ". $this->stok;
    }
}

$produknya = new Produknyaa();
// Fungsi get_class() dipakai untuk mencari nama class dari sebuah object atau variabel
echo "<b>Get Class : </b>";
print_r(get_class($produknya));
echo "<br>";

// Fungsi get_class_vars() dipakai untuk mencari daftar property sebuah class
echo "<b>Get Class Vars : </b>";
print_r(get_class_vars('Produknyaa'));
echo "<br>";

// Fungsi get_class_methods() dipakai untuk mencari daftar method sebuah class
echo "<b>Get Class Methods : </b>";
print_r(get_class_methods('Produknyaa'));
echo "<br>";

// Fungsi get_object_vars() dipakai untuk mencari daftar property sebuah object.
echo "<b>Get Object Vars : </b>";
print_r(get_object_vars($produknya));
echo "<br>";

?>