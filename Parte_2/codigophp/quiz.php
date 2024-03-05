<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'usuario');
define('DB_PASSWORD', 'contraseña');
define('DB_NAME', 'nombre_base_de_datos');

class Quiz {
    private $db;
    private $preguntas;
    private $respuestas;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->db->connect_error) {
            die("Error de conexión a la base de datos: " . $this->db->connect_error);
        }
    }

    public function getPreguntasDesdeBD() {
        $query = "SELECT * FROM preguntas";
        $result = $this->db->query($query);

        $this->preguntas = array();

        while ($row = $result->fetch_assoc()) {
            $nombre = $row['nombre'];
            $this->preguntas[$nombre] = $row;
        }

        return $this->preguntas;
    }

    public function setRespuestas($respuestasUsuario) {
        $this->respuestas = $respuestasUsuario;
    }

    public function calcularPuntuacion() {
        $puntuacion = 0;
        $comentarios = array();

        foreach ($this->preguntas as $nombre => $pregunta) {
            if (isset($this->respuestas[$nombre]) && $this->respuestas[$nombre] === $pregunta['respuesta_correcta']) {
                $puntuacion++;
            }

            $comentarios[$nombre] = $pregunta['comentario'];
        }

        return array('puntuacion' => $puntuacion, 'comentarios' => $comentarios);
    }
}
?>
