<?php
require_once 'quiz.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quiz = new Quiz();
    $quiz->setRespuestas($_POST);
    $preguntas = $quiz->getPreguntas();

    $respuestasVacias = array();
    foreach ($preguntas as $nombre => $pregunta) {
        if (!isset($_POST[$nombre])) {
            $respuestasVacias[] = $nombre;
        }
    }

    if (!empty($respuestasVacias)) {
        echo "Por favor, responde a las siguientes preguntas:<br>";
        foreach ($respuestasVacias as $nombre) {
            echo "- " . $preguntas[$nombre]['enunciado'] . "<br>";
        }
    } else {
        $resultado = $quiz->calcularPuntuacion();
        $puntuacion = $resultado['puntuacion'];

        echo "Tu puntuación es: " . $puntuacion . "<br>";

        echo '<a href="index.php?retake=true">Repetir el cuestionario</a>';
    }
}
?>
