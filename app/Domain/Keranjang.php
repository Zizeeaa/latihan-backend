<?php

namespace App\Domain;

final class Keranjang
{
    private array $item = [];

    private const BATAS_DISKON = 100_000;

    private const PERSEN_DISKON = 10;

    public function tambah(ItemKeranjang $item): self
    {
        $this->item[] = $item;

        return $this;
    }

    public function subtotal(): Uang
    {
        return array_reduce(
            $this->item,
            fn (Uang $total, ItemKeranjang $item) => $total->tambah($item->subtotal()),
            new Uang(0)
        );
    }

    public function diskon(): Uang
    {
        $subtotal = $this->subtotal()->jumlah;

        if ($subtotal < self::BATAS_DISKON) {
            return new Uang(0);
        }

        return new Uang(
            (int) ($subtotal * self::PERSEN_DISKON / 100)
        );
    }

    public function total(): Uang
    {
        $subtotal = $this->subtotal()->jumlah;
        $diskon = $this->diskon()->jumlah;

        return new Uang($subtotal - $diskon);
    }
}
