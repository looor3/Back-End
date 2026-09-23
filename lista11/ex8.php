<?php

$qntd = $_POST['qntd'];
$kg = $_POST['kg'];


if($kg>50){
    $calculo= ($kg-50)*4;
    echo "O senhor deve pagar uma multa de ", $calculo, " reais! :(";
}
else{
    echo "Não excedeu a quantidade!";
}