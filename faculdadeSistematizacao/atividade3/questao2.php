<?php
$valorTotal = 0;
$quantidade = 3;

for ($i = 0; $i < $quantidade; $i++) {
    $entrada = (float) readline("Digite o " . ($i + 1) . "º valor: ");
    $valorTotal += $entrada;
}

$media = $valorTotal / $quantidade;
echo "Média: " . number_format($media, 2, ',', '.') . PHP_EOL;
?>
