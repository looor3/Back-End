<?php

include "config/conexao.php";
$sql= "SELECT * FROM produtos";
$resultado = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Lista de produtos</h2>
    <table>
        <tr>
            <TH>Imagem</TH>
            <TH>ID</TH>
            <TH>Produto</TH>
            <TH>Categoria</TH>
            <TH>Preço</TH> 
            <TH>Quantidade</TH>
        </tr>
        <?php while($produto=$resultado->fetch(PDO::FETCH_ASSOC)){ ?>
        <tr>
            <td>
            <?php if($produto["imagem"] != null): ?>
                <img class= "img-produto" src="Uploads/<?= $produto ["imagem"] ?>" ?>
            <?php else: ?>
                <span>"sem imagem"</span> 
            <?php endif; ?> 
             </td>
             
        <td> <?php echo $produto["id"]?></td>
        <td> <?php echo $produto["nome"]?></td>
        <td> <?php echo $produto["categoria"]?></td>
        <td> <?php echo $produto["preco"]?></td>
        <td> <?php echo $produto["qtd"]?></td>
        <td>
            <a href="editar.php">Editar</a>
            |
            <a href="excluir.php?id=<?php echo $produto["id"]; ?>">Excluir</a>
            
        </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

