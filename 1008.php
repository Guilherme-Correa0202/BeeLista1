<?php
$n = intval(readline());
$ht = intval(readline());
$vr = doubleval(readline());


$salario = $vr * $ht;

echo "NUMBER = ". $n. PHP_EOL;
echo "SALARY = U$ " . number_format($salario, 2, '.',''). PHP_EOL; 
?>