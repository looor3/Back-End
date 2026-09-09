<?php

$num = [12, 2, 3, 4, 55, 6, 7, 8, 9, 10];
$maior = $num(0);

foreach ($num as $num2){
    if ($num > $maior){
        $maior = $num;
    }
}

echo "maior numero: $maior";