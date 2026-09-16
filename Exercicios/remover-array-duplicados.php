<?php

$numeros = [];

for ($i = 1; $i < $argc; $i++) {
     $numeros[] = (float) $argv[$i];
 }

print_r( array_unique($numeros));