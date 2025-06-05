<?php

class Filme {
    private string $nome = "";
    private int $anoLancamento;
    private string $genero;
    private array $notas = [];

    public function avalia(float $nota): void{
        $this->notas[] = $nota;

    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }


    // metodo de acesso
    // faço um metodo publico para acessa uma propriedade privada
    public function anoLancamento() : int {

        return $this -> anoLancamento;
    }

    public function defineAnoLancamento(int $anoLancamento){
       $this->anoLancamento = $anoLancamento; 
    }
}

