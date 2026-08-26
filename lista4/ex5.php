<?php

echo "Bem vindo a LO BET<br>";
echo "Acerte o número de 0 a 20 e ganhe o triplo<br>";

$aposta=10;
$numero=5;

if($numero == $numero + 1){
    echo"voce ganhou!", $aposta *3;
}
else{
    echo "quase la........ seu numero: $numero<br>numero sorteado:", $numero+1;

}

?>