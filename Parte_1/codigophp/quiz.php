<?php
class Quiz {
    private $preguntas = array(
        'q1' => array(
            'enunciado' => '¿Qué significa PHP?',
            'opciones' => array(
                'a' => 'Página de inicio personal',
                'b' => 'PHP: Procesador de hipertexto',
                'c' => 'Procesador de hipervínculos privado',
                'd' => 'Página de enlace de PHP'
            ),
            'respuesta_correcta' => 'b',
        ),
        'q2' => array(
            'enunciado' => '¿Cuál es el resultado de 2 + 2 en PHP?',
            'opciones' => array(
                'a' => '3',
                'b' => '4',
                'c' => '5',
            ),
            'respuesta_correcta' => 'b',
        ),
        'q3' => array(
            'enunciado' => '¿Cuál de los siguientes NO es un tipo de dato de PHP?',
            'opciones' => array(
                'a' => 'Entero',
                'b' => 'Booleano',
                'c' => 'Caracter',
                'd' => 'Flotante'
            ),
            'respuesta_correcta' => 'c',
        ),
        'q4' => array(
            'enunciado' => '¿Cuál es el resultado de echo "Hola" . " " . "Mundo";?',
            'opciones' => array(
                'a' => 'HelloWorld',
                'b' => 'Hola Mundo',
                'c' => '"Hola Mundo"',
            ),
            'respuesta_correcta' => 'b',
        ),
        'q5' => array(
            'enunciado' => 'En PHP, ¿qué bucle se utiliza para ejecutar un bloque de código un número especificado de veces?',
            'opciones' => array(
                'a' => 'Bucle for...',
                'b' => 'Bucle while',
                'c' => 'Bucle do...while',
                'd' => 'Bucle foreach',
            ),
            'respuesta_correcta' => 'a',
        ),
        'q6' => array(
            'enunciado' => '¿Qué función de PHP se utiliza para abrir un archivo para escritura?',
            'opciones' => array(
                'a' => 'fopen',
                'b' => 'file_open',
                'c' => 'open_file',
                'd' => 'Ninguna de las anteriores',
            ),
            'respuesta_correcta' => 'd',
        ),
        'q7' => array(
            'enunciado' => '¿Cuál es el propósito de la superglobal $_GET en PHP?',
            'opciones' => array(
                'a' => 'Recuperar datos de un formulario con el método POST',
                'b' => 'Almacenar variables de sesión',
                'c' => 'Recuperar datos de la cadena de consulta URL',
                'd' => 'Definir constantes globales',
            ),
            'respuesta_correcta' => 'c',
        ),
        'q8' => array(
            'enunciado' => '¿Cuál de los siguientes es un ejemplo de constante mágica de PHP?',
            'opciones' => array(
                'a' => '$this',
                'b' => 'LINE',
                'c' => '$var',
                'd' => 'functionName()',
            ),
            'respuesta_correcta' => 'b',
        ),
        'q9' => array(
            'enunciado' => '¿Qué hace la función include en PHP?',
            'opciones' => array(
                'a' => 'Ejecuta un bloque de código solo si una condición es verdadera',
                'b' => 'Incluye y evalúa un archivo especificado',
                'c' => 'Define una nueva función',
                'd' => 'Genera un número aleatorio',
            ),
            'respuesta_correcta' => 'b',
        ),
        'q10' => array(
            'enunciado' => '¿Cuál de los siguientes es un ejemplo de constante mágica de PHP?',
            'opciones' => array(
                'a' => 'new',
                'b' => 'objeto',
                'c' => 'crear',
                'd' => 'instancia',
            ),
            'respuesta_correcta' => 'a',
        ),

    );

    private $respuestas = array();

    public function setRespuestas($respuestasUsuario) {
        $this->respuestas = $respuestasUsuario;
    }

    public function getPreguntas() {
        return $this->preguntas;
    }

    public function calcularPuntuacion() {
        $puntuacion = 0;
        $comentarios = array();

        foreach ($this->preguntas as $nombre => $pregunta) {
            if (isset($this->respuestas[$nombre]) && $this->respuestas[$nombre] === $pregunta['respuesta_correcta']) {
                $puntuacion++;
            }

            // Añadir comentarios para cada pregunta
            $comentarios[$nombre] = $pregunta['comentario'];
        }

        return array('puntuacion' => $puntuacion, 'comentarios' => $comentarios);
    }
}
?>
