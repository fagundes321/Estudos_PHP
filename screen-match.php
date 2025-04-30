<?php

echo "Bem-vindo(a) ao screen match!!
";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Watchmen";

$anoLancamento = $argv[1] ?? 2022;
$notaFilme = (8.8 + 5 + 4)/3;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020 ;

echo "nome do Filme:  $nomeFilme" ;
echo "nota do Filme: $notaFilme\n" ;
echo "Ano de lançamento: $anoLancamento \n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento \n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022){
 echo "Esse filme ainda é novo \n";
} else {
    echo "Esse filme não é um lançamento \n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
};