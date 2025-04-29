<?php

echo "Bem-vindo(a) ao screen match!!
";

$nomeFilme = "Top Gun - Maverick
";
$anoLancamento = 2022;
$notaFilme = (8.8 + 5 + 4)/2;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020 ;

echo $nomeFilme;
echo $notaFilme ;