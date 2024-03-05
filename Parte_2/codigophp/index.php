<?php
// index.php

require_once 'db_config.php';
require_once 'quiz.php';

$quiz = new Quiz();

// Obtén preguntas desde la base de datos
$preguntas = $quiz->getPreguntasDesdeBD();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <link rel="stylesheet" href="quiz.css">
</head>
<body>
    
    <form method="post" action="process.php">
        <h1>PHP Quiz</h1>

        <?php foreach ($preguntas as $nombre => $pregunta): ?>
            <div class="question">
                <p><?php echo $pregunta['enunciado']; ?></p>

                <?php foreach ($pregunta['opciones'] as $opcionKey => $opcionValue): ?>
                    <label><input type="radio" name="<?php echo $nombre; ?>" value="<?php echo $opcionKey; ?>"> <?php echo $opcionValue; ?></label>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
