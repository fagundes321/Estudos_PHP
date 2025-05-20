<?php

class Caneta{
    // meus atributos, tudo aquilo que é exclusivo do objeto
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // Metodos, tudo aquilo que o objeto pode fazer
    public function rabiscar() {
        if ($this -> tampada == true) {
            echo "<p>ERRO! Não posso rabiscar!</p>";
        }else {
            echo "<p>Estou rabiscando...</p>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }
}