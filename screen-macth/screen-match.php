<?php

require "funcoes.php";

echo "Bem-vindo(a) ao Screen Match!!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$somaDeNotas = array_sum($notas);
$notaFilme = $quantidadeDeNotas > 0 ? $somaDeNotas / $quantidadeDeNotas : 0;

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
