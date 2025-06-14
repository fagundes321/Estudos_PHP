<?php require_once __DIR__ . '/../routes/rotas.php';

$adicionar = "adicionar"
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="../styles/adicionar.css">
</head>
<body>
    <div id="agenda">
        <h1>Adicionar Contato</h1>
        <form method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <div class="telefone">
                <input type="number" name="ddd" placeholder="DDD" style="width: 60px;" required>
                <input type="number" name="numero" placeholder="Número" required>
            </div>
            <div class="form-actions">
                <button type="submit">Salvar</button>
                <a href="/index.php">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
