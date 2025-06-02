<?php

$a = 0;
$b = 2;
$c = 1;

if ($a > 0 ) {
    if ($b > 0 ) {
        echo "letra E";
    }else {
        echo "letra D";
    }
} else {
    if ($c > 0) {
        echo "letra B\n";
    }
}

$i = 0;

while ($i <= 10) {
    echo($i . " Ola mundo\n");
    $i = $i + 1;
}
