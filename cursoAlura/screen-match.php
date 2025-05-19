<?php

function exibeMensagemLancamento($ano) {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento!\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo.\n";
    } else {
        echo "Esse filme não é um lançamento.\n";
    }
}

function incluiNoPlano($planoPrime, $anoLancamento) {
   return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao Screen Match!!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;
foreach ($notas as $nota) {
    $somaDeNotas += $nota;
}


$notaFilme = array_sum($notas) / $quantidadeDeNotas;

$planoPrime = true;

$incluidoNoPlano = incluiNoPlano($planoPrime, $anoLancamento);



exibeMensagemLancamento($anoLancamento);

echo "Nome do Filme: $nomeFilme\n";
echo "Nota do Filme: $notaFilme\n";
echo "Ano de Lançamento: $anoLancamento\n";

$genero = match (trim($nomeFilme)) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se Beber Não Case" => "Comédia",
    default => "Gênero desconhecido",
};

echo "O gênero do filme é: $genero\n";
