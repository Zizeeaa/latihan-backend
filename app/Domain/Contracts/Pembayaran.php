<?php

namespace App\Domain\Contracts;

use App\Domain\Uang;

interface Pembayaran
{
    public function bayar(Uang $jumlah): bool;
}
