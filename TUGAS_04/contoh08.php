<?php
class Pesan {
    public static function __callStatic($namaMethod, $argumen) {
        if ($namaMethod == 'sapa') {
            switch (count($argumen)) {
                case 1:
                    return "Halo, " . $argumen[0] . "!";
                case 2:
                    return "Halo, " . $argumen[0] . "! Selamat " . $argumen[1] . ".";
                default:
                    return "Format sapaan tidak valid!";
            }
        }
    }
}

echo Pesan::sapa("Budi");              
echo "<br>";
echo Pesan::sapa("Ani", "Pagi");       
echo "<br>";
echo Pesan::sapa();                    
?>