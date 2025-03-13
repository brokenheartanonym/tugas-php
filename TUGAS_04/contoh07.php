<?php
class Kalkulator {
    public function __call($namaMethod, $argumen) {
        if ($namaMethod == 'tambah') {
            switch (count($argumen)) {
                case 2:
                    return $argumen[0] + $argumen[1]; 
                case 3:
                    return $argumen[0] + $argumen[1] + $argumen[2]; 
                default:
                    return "Jumlah argumen tidak valid!";
            }
        }
    }
}

$calc = new Kalkulator();

echo $calc->tambah(5, 3);       
echo "<br>";
echo $calc->tambah(4, 7, 2);    
echo "<br>";
echo $calc->tambah(1);          
?>