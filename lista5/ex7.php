<?php

$n1= 10;
$n2= 5;
$operacao= "+";

if ($operacao== "+"){
    echo "a soma é", ($n1+$n2);
}
else if($operacao== "-"){
    echo "a subtração é", ($n1-$n2);
}
else if($operacao== "*"){
    echo "a multiplicação é", ($n1*$n2);
}
else if($operacao== "/"){
    echo "a divisão é", ($n1/$n2);
}
else{
    echo "operação inválida";
}
    
?>