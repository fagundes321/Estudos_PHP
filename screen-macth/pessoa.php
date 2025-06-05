<?php

require __DIR__ . "/src/Modelo/Pessoa.php";

echo "Bem Vindo ao Alunex \n";

$aluno = new Aluno;

$aluno -> defineReponsavel("Poliana");
$aluno -> soma(8);
$aluno -> soma(5);
$aluno -> soma(9);
$aluno -> soma(3);

echo $aluno -> 

echo "Media do aluno: " . $aluno -> media() . "\n";

echo "Responsavel pelo aluno: " . $aluno -> reponsavel() . "\n";

echo "Matricula do aluno: " . $aluno -> matricula() . "\n";