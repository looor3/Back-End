<?php

$combustivel = $_POST["combustivel"];
$litros = $_POST["litros"];

if ($combustivel == "gasolina") {
    $preco = 6.20;
}
elseif ($combustivel == "etanol") {
    $preco = 4.20;
}
else {
    $preco = 6.00;
}

$total = $litros * $preco;

echo "⛽ Você abasteceu $litros litros.<br>";
echo "💰 Total: R$ " . number_format($total, 2, ",", ".");
?>