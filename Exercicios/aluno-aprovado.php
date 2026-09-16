<?php

$notas = [];

for ($i = 1; $i < $argc; $i++) {
     $notas[] = (float) $argv[$i];
 }

 foreach($notas as $nota) {
    if ($nota > 6) {
        echo "Aprovado\n";
    } else {
        echo "Desaprovado\n";
    }
 }
