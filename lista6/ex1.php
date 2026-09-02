<?php
$mes = "fevereiro";

switch ($mes) {
    case "janeiro":
        echo "O mês tem 31 dias";
        break;

    case "fevereiro":
        echo "O mês tem 28 dias";
        break;

    case "março":
        echo "O mês tem 31 dias";
        break;

    default:
        echo "Mês inválido";
}