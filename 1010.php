<?php

$prod1 = explode(' ', fgets(STDIN)); 
$prod2 = explode(' ', fgets(STDIN));

$tP1 = $prod1[1] * $prod1[2]; 
$tP2 = $prod2[1] * $prod2[2];
$total = $tP1 + $tP2;

echo "VALOR A PAGAR: R$ " . number_format($total, 2, '.', '') . PHP_EOL;

?>
