<?php

echo"caixa eletrônico - Itaú<br>";
echo"1- Consultar saldo<br>2- Fazer saque<br>3- Depósito<br>4- Ver extrato<br>5- Sair<br>";

$opcao = 3;

switch ($opcao) {
    case 1:
        echo "Seu saldo é de R$ 1.000.000,00";
        break;

    case 2:
        echo "Digite o valor do saque";
        break;

    case 3:
        echo "Digite o valor do depósito";
        break;

    case 4:
        echo "Seu extrato é:<br> 01/01/2024 - Depósito - R$ 500,00<br> 02/01/2024 - Saque - R$ 200,00<br>";
        break;

    case 5:
        echo "Você saiu do caixa eletrônico";
        break;

    default:
        echo "Opção inválida";
}