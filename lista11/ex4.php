<?php
$medida = $_POST["medida"];

$conversao = $medida * 100;

echo "A medida, em cm é: ", $conversao;