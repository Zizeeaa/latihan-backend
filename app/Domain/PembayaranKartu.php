<?php

namespace App\Domain;

use App\Domain\Traits\MencatatTransaksi;

class PembayaranKartu extends PembayaranBase
{
    use MencatatTransaksi;

    public function bayar(Uang $jumlah): bool
    {
        $this->catat(
            "Pembayaran kartu {$jumlah->format()} dengan referensi {$this->referensi}"
        );

        return true;
    }
}
