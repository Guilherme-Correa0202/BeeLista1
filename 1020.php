<?php
$idade = intval(readline());
$data = array(0, 0, 0);

while ($idade > 0) {
    switch(true) {
        case ($idade < 30):
            $data[2] = $idade;
            $idade = 0;
            break;
        case ($idade < 365):
            $data[1] = intval($idade / 30);
            $idade %= 30;
            break;
        default:
            $data[0] = intval($idade / 365);
            $idade %= 365;
    }
}

echo $data[0] . " ano(s)" . PHP_EOL;
echo $data[1] . " mes(es)" . PHP_EOL;
echo $data[2] . " dia(s)" . PHP_EOL;
?>
