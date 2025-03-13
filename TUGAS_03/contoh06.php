<?php
class AkunBank {
    private $saldo; 

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    public function deposit($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "✅ Deposit berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        } else {
            echo "❌ Error: Jumlah deposit harus lebih dari 0!<br>";
        }
    }

    public function withdraw($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "✅ Penarikan berhasil: Rp " . number_format($jumlah, 0, ',', '.') . "<br>";
        } else {
            echo "❌ Error: Saldo tidak mencukupi atau jumlah tidak valid!<br>";
        }
    }

    public function getSaldo() {
        return "💰 Saldo saat ini: Rp " . number_format($this->saldo, 0, ',', '.') . "<br>";
    }
}

$akun = new AkunBank(1000000);
echo $akun->getSaldo(); 

$akun->deposit(500000);
echo $akun->getSaldo(); 

$akun->withdraw(2000000); 
echo $akun->getSaldo(); 
?>