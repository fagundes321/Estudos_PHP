<?php
$valor = 0;

for ($i = 0; $i < 3; $i++) {
    $valor += (float) readline("Digite um valor: ");
}

$media = $valor / 3;
echo "Média: " . $media;
?>