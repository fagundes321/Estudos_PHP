<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1 -> cor = "Azul";
        $c1 -> ponta = 0.5;
        $c1 -> tampada = false;
        $c1 -> tampar();
        print_r($c1);

        echo "<br>";

        $c2 = new Caneta;
        $c2 -> cor = "Verde";
        $c2 -> carga = 50;
        $c2 -> tampar();
        print_r($c2);

        echo "<br>";

        require_once "Impressora.php";
        $imp1 = new Impressora;
        $imp1 -> papel = 50;
        $imp1 -> tinta = 30;
        $imp1 -> ligado = true;
        $imp1 -> ligar();
        print_r($imp1);
    
    ?>
</body>
</html>