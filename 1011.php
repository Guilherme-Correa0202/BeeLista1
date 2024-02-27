<?php
$R = doubleval(readline());
$Pi = 3.14159;

$V = (4/3.0)*$Pi* $R*$R*$R;

echo "VOLUME = ". number_format($V, 3,'.',''). PHP_EOL;
?>