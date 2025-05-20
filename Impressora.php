<?php
class Impressora{
    public $tinta;
    public $papel;
    public $ligado;

    function ligar(){
        if ($this -> ligado == true) {
            echo "Pronta para Imprimir";
        }else{
            Echo "Erro! A impressora não está ligada";
        }
    }


    function receber(){

    }

    function imprimir(){

    }

    function escanear(){

    }
}