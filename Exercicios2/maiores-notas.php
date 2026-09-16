<?php 

$notas = [];

 for ($i = 1; $i < $argc; $i++) {
     $notas[] = (float) $argv[$i];
 }

sort($notas); 

$qtde = count($notas);

 for ($i = 1;$i <=3;$i++) {
     echo $notas[--$qtde]  ;
     echo "\n";
 }