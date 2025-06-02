<?php

$a = 0;
$b = 2;
$c = 1;

// Estrutura condicional para imprimir letras com base nos valores de $a, $b e $c
if ($a > 0) {
    if ($b > 0) {
        echo "Letra E" . PHP_EOL;
    } else {
        echo "Letra D" . PHP_EOL;
    }
} else {
    if ($c > 0) {
        echo "Letra B" . PHP_EOL;
    }
}

// Estrutura de repetição para imprimir de 0 a 10 com a mensagem "Olá mundo"
for ($i = 0; $i <= 10; $i++) {
    echo "$i Olá mundo" . PHP_EOL;
}
