<?php
class Produk {
    public $nama; 

    public function __construct($nama) {
        if (!empty($nama)) {
            $this->nama = $nama;
        } else {
            $this->nama = "Produk Tidak Diketahui";
        }
    }

    public function getNama() {
        return "Nama produk: " . $this->nama . "<br>";
    }
}

$barang1 = new Produk("Laptop");
echo $barang1->getNama(); 

$barang2 = new Produk(""); 
echo $barang2->getNama(); 
?>