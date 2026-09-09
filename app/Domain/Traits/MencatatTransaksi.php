<?php

namespace App\Domain\Traits;

trait MencatatTransaksi
{
    protected array $log = [];

    protected function catat(string $pesan): void
    {
        $this->log[] = $pesan;
    }

    public function getLog(): array
    {
        return $this->log;
    }
}
