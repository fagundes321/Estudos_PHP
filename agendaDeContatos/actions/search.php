<?php 

require_once __DIR__ . '/../routes/rotas.php';

$agenda = [];

if (!empty($_GET['search'])) {
    $pegarUrlPesquisar = $_GET['search'];
    
    $sql = $pdo->query("SELECT * FROM agenda WHERE 
        nome LIKE '%$pegarUrlPesquisar%' OR 
        ddd LIKE '%$pegarUrlPesquisar%' OR 
        numero LIKE '%$pegarUrlPesquisar%' 
        ORDER BY nome ASC");

    if ($sql->rowCount() > 0) {
        $agenda = $sql->fetchAll(PDO::FETCH_ASSOC);
    }

} else {
    $sql = $pdo->query("SELECT * FROM agenda ORDER BY id ASC");

    if ($sql->rowCount() > 0) {
        $agenda = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
