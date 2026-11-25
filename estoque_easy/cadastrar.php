<?php

include 'config/conexao.php';

$nome= $_POST['nome'];
$categoria = $_POST['categoria'];
$preco= $_POST['preco'];
$qtd= $_POST['quantidade'];

$nomeImagem = null;

if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] === UPLOAD_ERR_OK) {
   $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];
   $extensao = strtolower(pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION));

   if(!in_array($extensao, $extensoesPermitidas)) {
        die ("formato não permitido. Use jpg, jpeg, png ou webp");
    }
    if($_FILES['imagem']['size'] > 2 * 1024 * 1024) {
        die("Imagem muito grande!!");
    }
    $nomeImagem = uniqid("produto_") . "." . $extensao; 
    move_uploaded_file($_FILES['imagem']['tmp_name'], "Uploads/" . $nomeImagem);
}



$sql= "INSERT INTO produtos(nome, qtd, preco, categoria, imagem) VALUES ('$nome', '$qtd', '$preco', '$categoria', '$nomeImagem')";

if($conexao->query($sql)){
    echo "produto cadastrado";
}
else{
    echo "erro ao cadastrar";
}
?>




