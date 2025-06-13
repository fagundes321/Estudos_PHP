<?php
require_once('database/conn.php');

$agenda = [];

$sql = $pdo->query("SELECT * FROM agenda ORDER BY id ASC");

if ($sql->rowCount() > 0) {
    $agenda = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div id="agenda">
        <h1>Agenda</h1>
        <form action="">
            <input type="search" value="" placeholder="Pesquise" class="search-input" style="width: 240px;">
            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
     
        <div id="contatos">
               <thead class="categorias" >
            <tr>
            <th scope="col">Person</th>
            <th scope="col">Most interest in</th>
            <th scope="col">Age</th>
            </tr>
        </thead>
            <?php // foreach ($agenda as $contatos)?>
                <div class="contatos">
                    <p class="task-description">tessafasfasfasfasfaste</p>

                    <div class="task-actions">
                        <a class="action-button edit-button">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>

                        <a href="src/actions/delete.php?id=" class="action-button delete-button">
                            <i class="fa-regular fa-trash-can"></i>
                        </a>
                    </div>
                </div>
            <?php // endforeach ?>
        </div>
    </div>
</body>

</html>