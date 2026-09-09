<?php

namespace App\Domain;

use App\Domain\Traits\MencatatTransaksi;

class PembayaranTransferBank extends PembayaranBase
{
    use MencatatTransaksi;

    public function bayar(Uang $jumlah): bool
    {
        $this->catat(
            "Pembayaran transfer bank {$jumlah->format()} dengan referensi {$this->referensi}"
        );

        return true;
    }
}
