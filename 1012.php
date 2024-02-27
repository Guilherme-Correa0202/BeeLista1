<?php
$valores = explode(" ", readline());
$triangulo = ($valores[0] * $valores[2]) / 2;
$circulo = $valores[2] * $valores[2] * 3.14159;
$trapezio = (($valores[0] + $valores[1]) * $valores[2]) / 2;
$quadrado = $valores[1] * $valores[1];
$retangulo = $valores[0] * $valores[1];
echo "TRIANGULO: " . number_format($triangulo, 3, '.', '') . PHP_EOL;
echo "CIRCULO: " . number_format($circulo, 3, '.', '') . PHP_EOL;
echo "TRAPEZIO: " . number_format($trapezio, 3, '.', '') . PHP_EOL;
echo "QUADRADO: " . number_format($quadrado, 3, '.', '') . PHP_EOL;
echo "RETANGULO: " . number_format($retangulo, 3, '.', ''). PHP_EOL;
?>