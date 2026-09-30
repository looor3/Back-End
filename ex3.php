<?php
$nome = $_POST['nome'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$imc = $peso/(($altura/100) * ($altura/100));


echo "👤 Paciente: $nome<br>⚖️ Peso: $peso kg<br>📏 Altura: $altura cm<br>📊 IMC: $imc <br>";

if ($imc>=19&&$imc<=24){
    echo "Classificação: você está saudável. ";
}
else if($imc>24&&$imc<=29){
    echo "Classificação: você está com sobrepeso. " ;
}
else if($imc>29&&$imc<=34){
    echo "Classificação: você está com obesidade grau I. ";
}
else if($imc>34&&$imc<=39){
    echo "Classificação: você está com obesidade grau II. ";
}
else if($imc>39){
    echo "Classificação: você está com obesidade grau III. ";
}
else if($imc<19){
    echo "Classificação: você não está saudável e com pouca massa corporal.";
}
else{
    echo "Classificação: não foi possível calcular seu imc. tente novamente com valores reais!";
}
