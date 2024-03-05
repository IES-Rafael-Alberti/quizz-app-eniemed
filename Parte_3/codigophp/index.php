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

        <?php foreach ($preguntas as $pregunta): ?>
            <div class="question">
                <p><?php echo $pregunta['nombre']; ?></p>

                <?php if ($pregunta['question_type'] === 'multiple_choice'): ?>
                    <?php foreach ($pregunta['opciones'] as $opcionKey => $opcionValue): ?>
                        <label><input type="checkbox" name="<?php echo $pregunta['id']; ?>[]" value="<?php echo $opcionKey; ?>"> <?php echo $opcionValue; ?></label>
                    <?php endforeach; ?>
                <?php elseif ($pregunta['question_type'] === 'short_answer'): ?>
                    <input type="text" name="<?php echo $pregunta['id']; ?>">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
