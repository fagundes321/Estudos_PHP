<?php

function exibeMensagemLancamento($ano) {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento!\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo.\n";
    } else {
        echo "Esse filme não é um lançamento.\n";
    }
}

function incluidoNoPlano($planoPrime, $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero): Filme
{
    $filme =   new Filme();
    $filme ->  nome = $nome;
    $filme ->  anoLancamento = $anoLancamento;
    $filme ->  genero = $genero;
    $filme ->  nota = $nota;

    return $filme;
}