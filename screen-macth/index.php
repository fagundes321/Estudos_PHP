<?php 

require __DIR__ . "/src/Modelo/Filmes.php";

echo "Bem-vindo ao ScreenMatch\n";

$filme = new Filme();
$filme -> defineAnoLancamento(2021);
// $filme -> nome = 'Thor - Ragnarok';
// $filme -> anoLancamento = 2021;
// $filme -> genero = 'super-heroi';

$filme -> avalia(10);
$filme -> avalia(10);
$filme -> avalia(5);
$filme -> avalia(5);

var_dump($filme);

// $filme -> notas = [31];

echo $filme -> media() . "\n" ;

echo $filme -> anoLancamento();