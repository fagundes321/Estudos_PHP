<?php
$x   = 10;
$exp = $x**2;

if ($exp >= ($x + 200)) {
    echo "$exp\n";
    echo "O valor de exp é maior ou igual a x\n";
} else {
    echo "$exp\n";
    echo "O valor de exp é menor que x\n";
}
