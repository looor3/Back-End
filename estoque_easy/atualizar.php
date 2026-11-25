<?php

include "config/conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

$sql = "UPDATE produtos SET
        nome = '$nome',
        quantidade = '$quantidade',
        preco = '$preco',
        categoria = '$categoria'
        WHERE id = $id";

if($conexao->query($sql)){
    echo "Produto editado com sucesso";
}
else{
    echo "Erro ao atualizar";
}

echo "<br><br> <a href='listar.php'>Voltar</a>";
?>
