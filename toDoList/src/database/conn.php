<?php

$hostname = 'mysql-db';
$port     = '3306';
$database = 'to_do_db';
$username = 'root';
$password = 'password' ;

try {
    $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    // Configura o modo de erro para exceção para facilitar o debug
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
