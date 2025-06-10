<?php

$hostname = '3306';
$port     = '3306';
$database = 'test_database';
$username = 'db_user';
$password = 'password' ;

try {
    $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    // Configura o modo de erro para exceção para facilitar o debug
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
