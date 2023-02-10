<?php 
// null coalescing operator bisa dipakai untuk memeriksa apakah sebuah variabel berisi nilai atau tidak:
// echo $produk ?? $smartphone ?? "Laptop"; // Laptop
// Salah satu kekurangan null coalescing operator adalah tidak bisa dipakai untuk hasil pemanggilan method.

class Perusahaanne {
    public function __construct(private $nama, protected $kota) // constructor property promotion-> mempersingkat proses inisialisasi property
    {

    }

    public function getInfo(){
        return "$this->nama dari kota $this->kota";
    }
}

class Produkke {
    public ?Perusahaanne $suplier;

    public function __construct($suplier)
    {
        $this->suplier = $suplier;
    }
}

$perusahaan1 = new Perusahaanne("CV. Sinar Samudra", "Surabaya");
$produk1 = new Produkke(null);

// echo $produk1->suplier->getInfo();  // Fatal error:  Uncaught Error: Call to a member function getInfo() on null

// Error terjadi karena kita sedang mengakses method dari object yang tidak ada (object null).

// Salah satu solusi dari masalah ini adalah dengan memeriksa isi property $suplier sebelum menjalankan $produk01->suplier->getInfo():

// if ($produk1->suplier != null) {
//     echo $produk1->suplier->getInfo();
// }

// nullsafe operator. Caranya, ganti tanda panah " -> " yang biasa dipakai untuk mengakses method menjadi " ?-> "

echo $produk1->suplier?->getInfo(); // nullsafe operator
// dibaca: akses method getInfo() hanya jika property suplier berisi sesuatu. Jika suplier berisi nilai null, tidak perlu jalankan apa-apa.

// Apabila diperlukan, nullsafe operator bisa di-chaining seperti contoh berikut:
// $produk01->suplier?->agent?->karyawan?->getInfo();
?>