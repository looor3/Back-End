<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email=="lorena@gmail.com" && $senha=="senha123"){
    echo "login bem sucedido!";
}
else{
    echo "email ou senha inválido!";
}