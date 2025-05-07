<?php

echo "Bem-vindo(a) ao Screen Match!!\n";

$nomeFilme = "Top Gun - Maverick\n";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc -1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) { 
    $notas[] = (float) $argv[$contador];
}

$somasDeNotas = 0;
foreach ($notas as $nota){ 
    $somaDeNotas += $nota;
}

var_dump($notas);
 
$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;



echo "Nome do Filme: $nomeFilme";
echo "Nota do Filme: $notaFilme\n";
echo "Ano de Lançamento: $anoLancamento\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento!\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo.\n";
} else {
    echo "Esse filme não é um lançamento.\n";
}

$genero = match (trim($nomeFilme)) {
    "Top Gun - Maverick" => "Ação",
    // "Thor: Ragnarok" => "Super-herói",
    // "Se Beber Não Case" => "Comédia",
    default => "Gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";
