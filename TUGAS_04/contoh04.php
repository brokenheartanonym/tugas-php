<?php
class Kendaraan {
    public function info() {
        return "Ini adalah kendaraan.";
    }
}

class Mobil extends Kendaraan {
    public function info() {
        return parent::info() . " Namun, ini adalah mobil.";
    }
}

$mobil = new Mobil();
echo $mobil->info(); 
?>