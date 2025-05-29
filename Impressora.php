<!-- // class Impressora{
//     public $tinta;
//     public $papel;
//     public $ligado;

//     function ligar(){
//         if ($this -> ligado == true) {
//             echo "Pronta para Imprimir";
//         }else{
//             Echo "Erro! A impressora não está ligada";
//         }
//     }


//     function receber(){

//     }

//     function imprimir(){

//     }

//     function escanear(){

//     }
// }

<?php
class Impressora {
    public $tinta = 100;
    public $papel = 10;
    public $ligado = false;

    function ligar() {
        if (!$this->ligado) {
            $this->ligado = true;
            echo "Impressora ligada.\n";
        } else {
            echo "A impressora já está ligada.\n";
        }
    }

    function receber($documento) {
        if ($this->ligado) {
            echo "Documento '{$documento}' recebido para impressão.\n";
        } else {
            echo "Erro! A impressora está desligada.\n";
        }
    }

    function imprimir() {
        if (!$this->ligado) {
            echo "Erro! A impressora está desligada.\n";
            return;
        }

        if ($this->papel > 0 && $this->tinta >= 10) {
            $this->papel--;
            $this->tinta -= 10;
            echo "Imprimindo documento...\n";
        } else {
            echo "Erro! Papel ou tinta insuficiente.\n";
        }
    }

    function escanear() {
        if ($this->ligado) {
            echo "Escaneando documento...\n";
        } else {
            echo "Erro! A impressora está desligada.\n";
        }
    }
}

// Exemplo de uso:
$minhaImpressora = new Impressora();
$minhaImpressora->ligar();
$minhaImpressora->receber("Relatório Semanal");
$minhaImpressora->imprimir();
$minhaImpressora->escanear();
