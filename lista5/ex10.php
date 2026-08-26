<?php

$peso= 50;
$altura= 1.58;
$resultado= $peso/($altura*$altura);

if ($resultado>=19&&$resultado<=24){
    echo "você está saudável. seu imc é: ", $resultado;
}
else if($resultado>24&&$resultado<=29){
    echo "você está com sobrepeso. seu imc é: ", $resultado;
}
else if($resultado>29&&$resultado<=34){
    echo "você está com obesidade grau I. seu imc é: ", $resultado;
}
else if($resultado>34&&$resultado<=39){
    echo "você está com obesidade grau II. seu imc é: ", $resultado;
}
else if($resultado>39){
    echo "você está com obesidade grau III. seu imc é: ", $resultado;
}
else if($resultado<19){
    echo "você não está saudável e com pouca massa corporal. seu imc é: ", $resultado;
}
else{
    echo "não foi possível calcular seu imc. tente novamente com valores reais!";
}
?>
