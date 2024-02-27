<?php

$km = intval(readline());
$litros = floatval(readline());

$X = $km / $litros;

echo number_format($X, 3, '.', '') . " km/l". PHP_EOL;

?>
