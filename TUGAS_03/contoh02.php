<?php
class BankAccount {
    private $saldo = 0; 

    public function tambahSaldo($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Saldo berhasil ditambahkan: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        } else {
            echo "Jumlah harus lebih dari 0!<br>";
        }
    }

    public function getSaldo() {
        return "Saldo saat ini: Rp " . number_format($this->saldo, 0, ',', '.') . "<br>";
    }
}

$akun = new BankAccount();
$akun->tambahSaldo(500000);
echo $akun->getSaldo();


$akun->tambahSaldo(-100000); 
?>