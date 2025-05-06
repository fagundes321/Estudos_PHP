<?php
$maiorNota = 0;
$contador = 0;
$nota = 0;
$somaNotas = 0;

while ($contador < 3) {
    // $nota = $argv[1] ?? 0;
    $nota = 10;
    $somaNotas = $somaNotas + $nota;

    $contador +=1;

    if ($contador == 1) {
        $maiorNota = $nota;
    } else {
        if ($nota > $maiorNota) {
            $maiorNota = $nota;
        }
    }
    
}

$media = $somaNotas / $contador;

echo "A média de notas é $media\n";
echo "A maior nota foi $maiorNota\n";