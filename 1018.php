<?php
$note_list = array(100, 50, 20, 10, 5, 2, 1);

$money = intval(readline());

echo $money . PHP_EOL;

for ($i = 0; $i < 7; $i++) {
    $count =  $money / $note_list[$i];
    
    echo (int) $count . " nota(s) de R$ " . $note_list[$i] . ",00" . PHP_EOL;
    
    $money %= $note_list[$i];
}
?>