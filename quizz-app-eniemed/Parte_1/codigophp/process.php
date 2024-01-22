<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $respuestasVacias = array();

    for ($i = 1; $i <= 10; $i++) {
        $preguntaVacia = "q" . $i;
        if (!isset($_POST[$preguntaVacia])) {
            $respuestasVacias[] = "Pregunta " . $i;
        }
    }

    if (!empty($respuestasVacias)) {
        echo "Por favor, responde a las siguientes preguntas:<br>";
        foreach ($respuestasVacias as $preguntaVacia) {
            echo "- " . $preguntaVacia . "<br>";
        }
    } else {
        echo "Formulario enviado correctamente. Gracias por participar.";
    }
}

