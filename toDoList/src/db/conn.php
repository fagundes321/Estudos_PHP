<?php
try {
    $dsn = "pgsql:host=ep-noisy-sunset-a8n8clc4-pooler.eastus2.azure.neon.tech;port=5432;dbname=to_do_list_db;sslmode=require";
    $username = "to_do_list_db_owner";
    $password = "npg_Dq41xSXAHQGJ";

    $pdo = new PDO($dsn, $username, $password);
    // Para mostrar erros detalhados no PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco: " . $e->getMessage();
    exit;
}
