<?php

function calcularImc(float $peso, float $altura) : string {
    $imc = $peso / ($altura * $altura);

return "IMC: " . number_format($imc, 2) . "\n";
/*
if ($imc < 18.5) {
    return "Classificação: Abaixo do peso";
} elseif ($imc < 25) {
    return "Classificação: Peso normal";
} elseif ($imc < 30) {
    echreturno "Classificação: Sobrepeso";
} else {
    return  "Classificação: Obesidade";
}*/
}



$peso = 95;
$altura = 1.75;

echo calcularImc( $peso,  $altura) ;

