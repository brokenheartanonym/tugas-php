<?php
class Mahasiswa {
    private $nama;  
    private $nim;  

    public function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        if (!empty($nama)) {
            $this->nama = $nama;
        } else {
            echo "Nama tidak boleh kosong!<br>";
        }
    }

    public function getNim() {
        return $this->nim;
    }

    public function setNim($nim) {
        if (is_numeric($nim) && strlen($nim) == 8) {
            $this->nim = $nim;
        } else {
            echo "NIM harus berupa angka dan memiliki 8 digit!<br>";
        }
    }
}

$mhs = new Mahasiswa("Budi Santoso", "22000123");

echo "Nama: " . $mhs->getNama() . "<br>"; 
echo "NIM: " . $mhs->getNim() . "<br>";   

$mhs->setNama("Andi Wijaya");
$mhs->setNim("22000234");

echo "Nama setelah diubah: " . $mhs->getNama() . "<br>"; 
echo "NIM setelah diubah: " . $mhs->getNim() . "<br>";   

$mhs->setNama("");        
$mhs->setNim("12345abc"); 
?>