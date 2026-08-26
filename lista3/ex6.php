<?php


$valorproduto= 10;
$valorminimo= 50;
$idade_cliente= 23;
$quantidade= 3;
$frete= 10;


//valor e frete
echo "Valor do produto: $valorproduto";
if ($valorproduto > $valorminimo){
    $frete=10;
    echo "<br>Há cobrança de frete!";
}
else{
    echo"<br>Não há cobrança de frete!";
}


//quantidade
echo "<br>Quantidade= $quantidade";


//valor total
if($valorproduto > $valorminimo){
    $frete=10;
    echo "<br>Valor total=", ($valorproduto * $quantidade + $frete);
}
else{


    echo "<br>Valor total=", ($valorproduto * $quantidade);
}


//bebidas
if($idade_cliente >=18){
    echo "<br>Bebidas alcóolicas podem ser vendidas";
}
else{
    echo"<br>Bebidas alcóolicas não podem ser vendidas";
}


?>      
