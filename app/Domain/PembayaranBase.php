<?php

namespace App\Domain;

use App\Domain\Contracts\Pembayaran;

abstract class PembayaranBase implements Pembayaran
{
    public function __construct(
        protected string $referensi
    ) {}

    public function getReferensi(): string
    {
        return $this->referensi;
    }

    abstract public function bayar(Uang $jumlah): bool;
}
