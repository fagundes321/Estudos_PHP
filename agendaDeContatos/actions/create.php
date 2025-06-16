<?php 

require_once __DIR__ . '/../routes/rotas.php';

$nome = filter_input(INPUT_POST, 'nome');
$ddd = filter_input(INPUT_POST, 'ddd');
$numero = filter_input(INPUT_POST, 'numero');

if ($nome && $ddd && $numero) {
    $sql = $pdo->prepare("INSERT INTO agenda (nome, ddd, numero) VALUES (:nome, :ddd, :numero)");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':ddd', $ddd);
    $sql->bindValue(':numero', $numero);
    $sql->execute();

  header('Location: /../pages/adicionar.php');
exit;


} // else {
//    header('Location: http://localhost:661/pages/adicionar.php');
// exit;


// }
