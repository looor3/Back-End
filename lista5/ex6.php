<?php

$nome= "lorena";
$idade = 17;

if($idade < "13"){
    echo"cadastro nao permitido";
}
elseif($idade >= "13"){
    echo"uso somente com controle parental";
}
else{
    echo"plataforma liberada";
}

?>