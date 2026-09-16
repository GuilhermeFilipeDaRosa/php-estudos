<?php 

function realizarOperacao(int $n1, int $n2, string $operacao) : float {
  return match ($operacao) {
        "+" => $n1 + $n2,
        "-" => $n1 - $n2,
        "*" => $n1 * $n2,
        "/" => $n1 / $n2,
    };
}

echo realizarOperacao(1, 2, "+");