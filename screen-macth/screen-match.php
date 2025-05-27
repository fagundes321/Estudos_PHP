<?php

require  "funcoes.php";

echo "Bem-vindo(a) ao Screen Match!!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$dados = '{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}';

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

$filme = criaFilme(nome : "Thor: Ragnarok", anoLancamento: 2021 ,nota: 7.8, genero: "super-herói");


echo $filme["ano"];

// transforma o objeto json em um array
var_dump(json_decode($dados, true));
echo "\n";

// transforma o array em um objeto json
$filmeComoStringJson = json_encode($filme);

// cria um arquivo json com as informações do array
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);
