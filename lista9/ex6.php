<?php

$msc = ["lonely day - system of a down", "futuros amantes - chico buarque", "bom brasileiro - cidade curupira",
    "my own summer - deftones", "yesterday - the beatles", "johana - suki waterhouse"];
$qtd= count ($msc);
echo "a quantidade de musicas é: $qtd";

foreach($msc as $msc2){
    echo "<br> $msc2";
}

