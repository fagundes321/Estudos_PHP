<?php

$x = 10;
$y = 25;
$z = $x;
$x = 5;
echo "O valor de z é $z\n";
$z = 19;

$nota1 = 8;
$nota2 = 6;
$soma  = $nota1 + $nota2;

if ($nota2 > $nota1) {
    echo "Nota 2 é maior que a Nota 1\n";
    $nota2 = 1;
} else {
    echo "Nota 2 não é maior que a Nota 1\n";
    if (($soma / 2) > ($nota2 / 2)) {
        echo "$nota2\n";
    }
}
