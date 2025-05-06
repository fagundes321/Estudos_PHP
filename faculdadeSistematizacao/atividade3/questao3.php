<?php
$sexo  = "";
$idade = 0;
$qtdMulheres = 0;
$valorIdade = 0;

for ($i = 0; $i < 3; $i++) {
    $sexo = readline("Digite o sexo (M para mulher ou H para homem): ");
    $idade = (int)readline("Digite a idade: ");

    if ($sexo == "M") {
        $qtdMulheres += 1;
        $valorIdade += $idade;
    }
}

echo "A quantidade de mulheres é $qtdMulheres\n";

if ($qtdMulheres > 0) {
    $mediaIdade = $valorIdade / $qtdMulheres;
    echo "A média de idade das mulheres é $mediaIdade\n";
} else {
    echo "Nenhuma mulher foi cadastrada.\n";
}
