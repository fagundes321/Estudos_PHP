<?php
$titular = readline("Digite seu nome: ");
$saldo = readline("Digite o Seu saldo: ");

while (!is_numeric($saldo)) {
    echo "Apenas digite números \n";
    $saldo = readline("Digite o Seu saldo: ");
}


$painel = <<<MENU
**********************
Titular: $titular
Saldo atual: R$ $saldo
**********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair\n
MENU;
echo $painel;


$consultar = 1;
$sacar = 2;
$depositar = 3;
$sair = 4;

$comando = readline("");

while (!in_array($comando, [$consultar, $sacar, $depositar, $sair])) {
    echo "Ação inválida.\n";
    echo $painel;
    $comando = readline("Escolha uma opção: ");
    
    while ($comando == $consultar) {
        echo $painel;
        $comando = readline("");
    }
}

if ($comando == $sacar && $sacar > $saldo) {

   echo "O valor é maior que o saldo";
} else{
    echo "Qual valor deseja sacar?\n";
    $valor = readline("");
    $acaoSacar = $saldo - $valor;
    var_dump($saldo);
}



