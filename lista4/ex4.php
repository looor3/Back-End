<?php

$email = "email@gmail.com";
$senha = "12345678";
$ativo = true;

echo "Login - Facebook <br>";

if($email == "email@gmail.com" &&
   $senha == "12345678" &&
   $ativo == true){
    echo "Login autorizado.";
   }
else{
    echo "Usuário ou senha invalidos.";
}

?>