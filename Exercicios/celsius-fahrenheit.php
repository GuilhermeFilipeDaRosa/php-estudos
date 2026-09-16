<?php

function celsiusToFahrenheit(int $celsius) : float{
 return ($celsius * 9 / 5) + 32;
}

$celsius = 25;

$fahrenheit = celsiusToFahrenheit($celsius);

echo "Temperatura em Celsius: $celsius °C\n";
echo "Temperatura em Fahrenheit: $fahrenheit °F";

?>