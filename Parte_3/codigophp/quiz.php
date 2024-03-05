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
        $query = "SELECT * FROM Questions";
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
    public function agregarPregunta($tipo, $detalles) {
        $query = "INSERT INTO Questions (question_type, question_details) VALUES ('$tipo', '$detalles')";
        $this->db->query($query);
    }

    public function obtenerTodasLasPreguntas() {
        $query = "SELECT * FROM Questions";
        $result = $this->db->query($query);

        $preguntas = array();

        while ($row = $result->fetch_assoc()) {
            $preguntas[] = $row;
        }

        return $preguntas;
    }

    public function actualizarPregunta($id, $tipo, $detalles) {
        $query = "UPDATE Questions SET question_type = '$tipo', question_details = '$detalles' WHERE id = $id";
        $this->db->query($query);
    }

    public function eliminarPregunta($id) {
        $query = "DELETE FROM Questions WHERE id = $id";
        $this->db->query($query);
    }
}

