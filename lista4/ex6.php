<?php

$idade= 67;
$deficiencia=false;
$gestante= false;
$lorena= true;

if($lorena==true){
    echo"voce é a lorena, o seu atendimento é o mais prioritário!";
}
else if($deficiencia== true || $idade>=60 ||$gestante== true ){
    echo"atendimento prioritario!";
}
else{
    echo "atendimento normal!";
}

?>