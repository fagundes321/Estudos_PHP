<?php

$hostname = '127.0.0.1';
$port     = '3306';
$database = 'to_do_list_db';
$username = 'root';
$password = '' ;

try {
    $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    // Configura o modo de erro para exceção para facilitar o debug
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
