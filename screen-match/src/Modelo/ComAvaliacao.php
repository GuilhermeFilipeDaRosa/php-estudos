<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * Summary of avalia
     * @param float $nota
     * @throws \InvalidArgumentException
     * @return void
     */
    public function avalia(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $soma = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $soma / $quantidadeNotas;
    }
}
