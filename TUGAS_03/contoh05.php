<?php
class Karyawan {
    private $gaji; 

    public function __construct($gaji) {
        $this->setGaji($gaji); 
    }

    public function setGaji($gaji) {
        if ($gaji >= 0) {
            $this->gaji = $gaji;
        } else {
            echo "❌ Error: Gaji tidak boleh negatif!<br>";
        }
    }

    public function getGaji() {
        return "Gaji Karyawan: Rp " . number_format($this->gaji, 0, ',', '.');
    }
}

$karyawan1 = new Karyawan(5000000);
echo $karyawan1->getGaji(); 

$karyawan1->setGaji(-1000000); 
?>