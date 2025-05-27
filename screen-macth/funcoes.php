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

function incluiNoPlano($planoPrime, $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}