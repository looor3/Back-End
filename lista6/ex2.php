<?php
//simulando voce discando opcao 2 no celualr
$opcao= 2;
switch ($opcao) {
    case 1:
        echo "Segunda opção da fatura";
        break;

    case 2:
        echo "Upgrade no plano";
        break;

    case 3:
        echo "Falar com um atendente";
        break;

    default:
        echo "Opção inválida";
}