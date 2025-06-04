<?php 

require __DIR__ . "/src/Modelo/Filmes.php";

echo "Bem-vindo ao ScreenMatch\n";

$filme = new Filme();
$filme -> nome = 'Thor - Ragnarok';
$filme -> anoLancamento = 2021;
$filme -> genero = 'super-heroi';

$filme -> avalia(10);
$filme -> avalia(10);
$filme -> avalia(5);
$filme -> avalia(5);

var_dump($filme);

echo $filme -> media() ;
echo "\n";
