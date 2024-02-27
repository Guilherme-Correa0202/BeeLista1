<?php
$N = readline();
$S = doubleval(readline());
$TV = doubleval(readline());

$TS = $S + ($TV * 0.15);

echo "TOTAL = R$ " . number_format($TS,2,'.','') . PHP_EOL;

?>