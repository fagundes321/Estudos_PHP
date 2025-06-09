<?php
require_once('src/db/conn.php');

$tasks = [];

$sql = $pdo->query("SELECT * FROM tasks");

if ($sql->rowCount() > 0) {
    $tasks = $sql->fetchAll(PDO::FETCH_ASSOC);
}

// echo '<pre>'; 
// print_r($tasks); 
// echo '</pre>';
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- seu head -->
</head>
<body>
    <div id="to_do">
        <h1>Things to do</h1>
        <form action="" method="post" class="to-do-form">
            <input type="text" name="description" placeholder="write your task here" required>
            <button type="submit" class="form-button">
                <i class="fa-solid fa-plus"></i>
            </button>
        </form>

        <div id="tasks">
            <?php foreach ($tasks as $task): ?>
                <div class="task">
                    <input
                        type="checkbox"
                        name="progress"
                        class="progress"
                        <?= $task['completed'] ? 'checked' : '' ?>>

                    <p class="task-description"><?= htmlspecialchars($task['description']) ?></p>

                    <div class="task-actions">
                        <a class="action-button edit-button">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>

                        <a href="" class="action-button delete-button">
                            <i class="fa-regular fa-trash-can"></i>
                        </a>
                    </div>

                    <form action="" method="post" class="to-do-form edit-task hidden">
                        <input type="text" name="description" placeholder="Edit your task here" value="<?= htmlspecialchars($task['description']) ?>">
                        <button type="submit" class="form-button confirm-button">
                            <i class="fa-solid fa-check"></i>
                        </button>
                    </form>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <script src="src/javascript/script.js"></script>
</body>
</html>
