<?php
$maiorNota = 0;
$somaNotas = 0;
$quantidadeNotas = 3;

for ($i = 1; $i <= $quantidadeNotas; $i++) {
    // Substitua a linha abaixo por: (float) readline("Digite a $iª nota: ") se quiser entrada real
    $nota = 10; // Valor fixo apenas para exemplo

    $somaNotas += $nota;

    if ($i == 1 || $nota > $maiorNota) {
        $maiorNota = $nota;
    }
}

$media = $somaNotas / $quantidadeNotas;

echo "A média de notas é: " . number_format($media, 2, ',', '.') . PHP_EOL;
echo "A maior nota foi: " . number_format($maiorNota, 2, ',', '.') . PHP_EOL;
?>
