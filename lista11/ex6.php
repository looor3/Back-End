<?php

$nome= $_POST['nome'];
$horas= $_POST['horas'];

$horasAno= $horas * 365;
$anos= $horasAno / 24 / 365;

echo "Olá $nome <br><br>";
echo "voce passa aproximadamente $horasAno hrs por ano no celular <br>";
echo "isso representa aproximadamente $anos meses da sua vida";

?>