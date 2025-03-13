<?php
class Kendaraan {
    final public function info() {
        return "Ini adalah kendaraan.";
    }
}

class Mobil extends Kendaraan {
    public function info() {
        return "Ini adalah mobil.";
    }
}
?>