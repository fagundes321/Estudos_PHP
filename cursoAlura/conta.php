<?php

$saldo = 1_000;
$titular = "Victor Fagundes";

echo "**********************\n";
echo "Titular: $titular\n";
echo "Saldo atual: R$ $saldo\n";
echo "**********************\n";

do {
    $painel = <<<MENU
**********************
Titular: $titular
Saldo atual: R$ $saldo
**********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair
Escolha uma opção: 
MENU;

    echo $painel;
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "**********************\n";
            echo "Titular: $titular\n";
            echo "Saldo atual: R$ $saldo\n";
            echo "**********************\n";
            break;
        case 2:
            echo "Qual valor deseja sacar? \n";
            $valorASacar = (float) fgets(STDIN);
            if ($valorASacar > $saldo){
                echo "Saldo insuficiente.\n";
            } else {
                $saldo -= $valorASacar;
                echo "Saque realizado com sucesso.\n";
            }
            break;
        case 3:
            echo "Quanto deseja depositar? \n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
            echo "Depósito realizado com sucesso.\n";
            break;
        case 4:
            echo "Adeus!\n";
            break;
        default:
            echo "Opção inválida.\n";
            break;
    }

} while($opcao != 4);
