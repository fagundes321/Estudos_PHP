<?php
require_once('src/db/conn.php');

$pdo->exec("CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    description TEXT NOT NULL,
    completed INTEGER DEFAULT 0
)");

$pdo->exec("INSERT INTO tasks (description, completed) VALUES
    ('Estudar PHP', 0),
    ('Terminar projeto Docker', 1)
)");

echo "Tarefas inseridas!";
