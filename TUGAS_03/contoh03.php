<?php
class Kendaraan {
    protected $jenis; 

    public function __construct($jenis) {
        $this->jenis = $jenis;
    }

    protected function getJenisKendaraan() {
        return $this->jenis;
    }
}

class Mobil extends Kendaraan {
    public function getJenis() {
        return "Ini adalah kendaraan jenis: " . $this->getJenisKendaraan() . "<br>";
    }
}

$mobil = new Mobil("Sedan");
echo $mobil->getJenis(); 
?>