<?php

namespace App\Domain;

final class ItemKeranjang
{
    public function __construct(
        public readonly string $nama,
        public readonly Uang $harga,
        public readonly int $jumlah,
    ) {
        if ($jumlah < 1) {
            throw new \InvalidArgumentException(
                'Jumlah item minimal 1'
            );
        }
    }

    public function subtotal(): Uang
    {
        return $this->harga->kali($this->jumlah);
    }
}
