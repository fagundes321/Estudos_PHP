<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <pre>
        <?php
        // estudo de orientação a Objeto
            require_once 'Caneta.php';
            $c1 = new Caneta("BIC", "Azul", 0.5);
            
            echo '<pre>'; 
            print_r($c1); 
            echo '</pre>'; 
            ?>
    </pre>
</body>
</html>