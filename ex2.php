<?php

$motorista = $_POST["motorista"];
$veiculo = $_POST["veiculo"];
$horas = $_POST["horas"];

if ($veiculo == "moto") {
    $preco = 5.00;
}
elseif ($veiculo == "carro") {
    $preco = 8.00;
}
else {
    $preco = 12.00;
}

$total = $horas * $preco;

echo "Motorista: $motorista<br>";
echo "Tempo: $horas horas<br>";
echo "Total: R$ " . number_format($total, 2, ",", ".");
?>