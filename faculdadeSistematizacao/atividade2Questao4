<?php
$valorOrig  = 200;
$qtdParcela = 4;
$juros = 0;

if ($qtdParcela == 0 || $qtdParcela == 1) {
    $juros = 0;
} else {
    if ($qtdParcela == 2 || $qtdParcela == 3) {
        $juros = 10;
    } else {
        $juros = 20;
    }
    
}


$valorAtualizado = $valorOrig + ($valorOrig * $juros / 100);
$prestMensal = $valorAtualizado / $qtdParcela;

echo "$valorAtualizado \n";
echo "$prestMensal \n";
