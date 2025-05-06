<?php
$sexo  = "";
$idade = 0;
$qtdMulheres = 0;
$qtdHomens = 0;

for ($i = 0; $i < 0.5; $i++) {
    $sexo = readline("Digite o sexo (M para mulher ou H para homem): ");
    $idade = (int)readline("Digite a idade: ");

    if ($sexo == "M" || $sexo == "m") {
        $qtdMulheres += 1;
        
    }elseif ($sexo == "H" || $sexo == "h") {
        $qtdHomens += 1;
    }
}

echo "A quantidade de mulheres é $qtdMulheres\n";
echo "A quantidade de homens é $qtdHomens";