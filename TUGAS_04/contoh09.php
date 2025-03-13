<?php
class Kendaraan {
    public function bergerak() {
        return "Kendaraan sedang bergerak.";
    }
}

class Motor extends Kendaraan {
    public function bergerak() {
        return "Motor sedang melaju di jalan.";
    }
}

$motor = new Motor();
echo $motor->bergerak(); 
?>