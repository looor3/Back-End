<?php

function analisarvenda ($produto, $custo, $venda){
    $lucro = $venda - $custo;

   if ($lucro <= 0){
        $mensagem= "O produto teve prejuizo de $lucro";
    }
    else if ($lucro <= 20){
        $mensagem= "Lucro baixo, mas vale a pena";
    }
    else{
        $mensagem= "O produto teve um bom lucro de $lucro!!";
    }
    echo "Produto: $produto <br> Lucro: $lucro <br> Mensagem: $mensagem <br>";
}
analisarvenda("Camiseta", 40, 35);