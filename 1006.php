<?php
$nota1 = doubleval(readline());
$nota2 = doubleval(readline());
$nota3 = doubleval(readline());
$media = ($nota1 * 2+ $nota2* 3 + $nota3 * 5) / 10;
echo "MEDIA = ". number_format($media, 1,  '.', ' '). PHP_EOL;
?>