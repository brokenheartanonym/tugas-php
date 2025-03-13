<?php
class Kendaraan {
    public $merk;

    public function __construct($merk) {
        $this->merk = $merk;
    }

    public function info() {
        return "Kendaraan ini adalah $this->merk.";
    }
}

class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function __construct($merk, $jumlahPintu) {
        parent::__construct($merk); 
        $this->jumlahPintu = $jumlahPintu;
    }

    public function info() {
        return parent::info() . " Mobil ini memiliki $this->jumlahPintu pintu.";
    }
}

$mobil = new Mobil("Toyota", 4);
echo $mobil->info(); 
?>