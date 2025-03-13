<?php
class Kendaraan {
    public $merk;
    public $tahun;

    public function info() {
        return "Kendaraan ini adalah $this->merk tahun $this->tahun.";
    }
}

class Mobil extends Kendaraan {
    public $jumlahPintu;

    public function infoMobil() {
        return "Mobil ini adalah $this->merk tahun $this->tahun dengan $this->jumlahPintu pintu.";
    }
}

$mobil = new Mobil();
$mobil->merk = "Toyota";
$mobil->tahun = 2022;
$mobil->jumlahPintu = 4;

echo $mobil->info(); 
echo "<br>";
echo $mobil->infoMobil(); 
?>
