<?php

include "config/conexao.php";

$id = $_GET["id"];
echo "O id a ser excluído: " . $id;

$sql = "DELETE FROM produtos
            WHERE id=$id";

if($conexao->query($sql)){
    echo "<br> Produto excluído";
}
else{
    echo "Erro ao excluir";
}
echo "<br> <a href='listar.php'>Voltar</a>";
?>