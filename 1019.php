<?php
$tempo = intval(readline());
$horario = array(0, 0, 0);

while ($tempo > 0) {
    switch (true) {
        case $tempo < 60:
            $horario[2] = $tempo;
            $tempo = 0;
            break;
        case $tempo < 3600:
            $horario[1] = intval($tempo / 60);
            $tempo %= 60;
            break;
        default:
            $horario[0] = intval($tempo / 3600);
            $tempo %= 3600;
    }
}

echo $horario[0] . ":" . $horario[1] . ":" . $horario[2] . PHP_EOL;
?>