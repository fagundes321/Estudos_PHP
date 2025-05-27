<?php

$caminhoArquivo = __DIR__ . '/filme.json';
$conteudoArquivoFilme = file_get_contents($caminhoArquivo);
$filme = json_decode($conteudoArquivoFilme, true);

var_dump($filme);

    // Conhecemos o formato JSON e aprendemos a manipulá-lo com PHP através das funções json_encode e json_decode.
    // Aprendemos a ler e escrever em arquivos com funções como file_get_contents e file_put_contents.