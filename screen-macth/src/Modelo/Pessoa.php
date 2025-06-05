<?php

class Aluno{
    private string  $nome;
    private int     $matricula = 51142;
    private int     $cpf;
    private string  $reponsavel;
    public array   $notas = [];


    public function soma(float $nota): void{
        $this->notas[] = $nota;
    
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function defineReponsavel(string $reponsavel){ 
        $this->reponsavel = $reponsavel;
        
    }

    public function reponsavel(): string{
        return $this->reponsavel;
        
    }

    public function defineMatricula(int $matricula) {
        $this->matricula = $matricula;
    }

     public function matricula(): int{
        return $this->matricula;
        
    }


}