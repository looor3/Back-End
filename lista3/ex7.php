<?php


$nomecompleto= "Lorena Marques Batista";
if($nomecompleto!= ""){
    echo "Olá, $nomecompleto!";
}
$senha= "123456";
$confirmarsenha= "1256";
if($confirmarsenha!=$senha){
    echo "<br>Senha incorreta!";
}
$idade= 17;
echo "<br> Idade: $idade";


if($idade>=18 && $confirmarsenha==$senha && $nomecompleto!=""){
    echo "<br>Cadastro realizado com sucesso!";
}
else{
    echo "<br>Cadastro não permitido!";
}




?>