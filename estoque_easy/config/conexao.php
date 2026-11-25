<?php

try{
    $conexao = new PDO(
        "mysql:host=127.0.0.1;dbname=estoque_easy;charset=utf8mb4", "root", "");
}
catch(PDOException $erro){
    die("Erro ao conectar o banco");
}




?>