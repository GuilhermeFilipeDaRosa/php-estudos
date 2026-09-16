<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel
{
    use ComAvaliacao;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero
    ) {
    }


    public function nome(): string
    {
        return  $this->nome;
    }

    public function anoLancamento(): int
    {
        return  $this->anoLancamento;
    }

    public function genero(): Genero
    {
        return  $this->genero;
    }

    abstract public function duracaoEmMinutos(): int;
}
