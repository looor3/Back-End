<?php
include "config/conexao.php";
$nome= $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql= "SELECT * FROM usuarios WHERE email = '$email'";

$resultado = $conexao->query($sql);

if($resultado->rowCount()>0){
    echo "email existente. Use outro";
}
else{
    $sql = "INSERT INTO usuarios(nome, email, senha) 
    VALUES ('$nome', '$email', '$senha')";

    if($conexao->query($sql)){
        echo "Usuario cadastrado com sucesso";
        echo "<br>";
        echo "<a href='login.html'>ir para o Login</a>";
    }
    else{
        echo "erro! tente novamente";
    }
}