<?php

$nome= "lorena";
$nivel_acesso = 2;

if($nivel_acesso == "1"){
    echo"acesso basico";
}
elseif($nivel_acesso == "2"){
    echo"acesso intermediário";
}
elseif($nivel_acesso == "3"){
    echo"acesso administrador";
}
else{
    echo"acesso invalido";
}

?>