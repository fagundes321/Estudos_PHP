<?php

$qtdMulheres = 0;
$somaIdades = 0;

for ($i = 0; $i < 3; $i++) {
    // Solicita e normaliza o sexo
    $sexo = strtoupper(trim(readline("Digite o sexo (M para mulher ou H para homem): ")));

    // Valida o sexo
    while ($sexo !== 'M' && $sexo !== 'H') {
        echo "Entrada inválida. Digite 'M' para mulher ou 'H' para homem.\n";
        $sexo = strtoupper(trim(readline("Digite o sexo (M para mulher ou H para homem): ")));
    }

    // Solicita a idade
    $idade = (int)readline("Digite a idade: ");

    // Valida a idade
    while ($idade <= 0) {
        echo "Idade inválida. Digite um número positivo.\n";
        $idade = (int)readline("Digite a idade: ");
    }

    // Se for mulher, acumula os dados
    if ($sexo === 'M') {
        $qtdMulheres++;
        $somaIdades += $idade;
    }
}

// Exibe resultados
echo "\nQuantidade de mulheres: $qtdMulheres\n";

if ($qtdMulheres > 0) {
    $mediaIdade = $somaIdades / $qtdMulheres;
    echo "Média de idade das mulheres: " . number_format($mediaIdade, 2) . " anos\n";
} else {
    echo "Nenhuma mulher foi cadastrada.\n";
}
