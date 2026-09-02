<?php

echo "Bem-vindo à pizzaria!<br> Faça seu pedido:<br>";
echo "1- Pizza! <br>2- Hamburguer! <br>3- Refrigerante!<br>4- Sobremesa!<br>5- Sair<br>";

$opcao = 2;


switch ($opcao) {
 case 1:
 echo "Você escolheu pizza";
 break;

 case 2:
 echo "Você escolheu hamburguer";
 break;

 case 3:
 echo "Você escolheu refrigerante";
 break;
 
 case 4:
 echo "Você escolheu sobremesa";
 break;

 case 5:
 echo "Você saiu do pedido";
 break;
 
default:
 echo "Opção inválida";
 
}
