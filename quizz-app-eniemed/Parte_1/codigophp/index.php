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

        <!-- Question 1 -->
        <div class="question">
            <p>1. ¿Qué significa PHP?</p>
            <label><input type="radio" name="q1" value="a"> a) Personal Home Page</label>
            <label><input type="radio" name="q1" value="b"> b) PHP: Hypertext Preprocessor</label>
            <label><input type="radio" name="q1" value="c"> c) PHP Hyper Markup Language</label>
        </div>

        <!-- Question 2 -->
        <div class="question">
            <p>2. ¿Cuál es el resultado de 2 + 2 en PHP?</p>
            <label><input type="radio" name="q2" value="a"> a) 3</label>
            <label><input type="radio" name="q2" value="b"> b) 4</label>
            <label><input type="radio" name="q2" value="c"> c) 5</label>
        </div>

        <!-- Question 3 -->
        <div class="question">
            <p>3. ¿Cuál de los siguientes NO es un tipo de dato de PHP?</p>
            <label><input type="radio" name="q3" value="a"> a) Entero</label>
            <label><input type="radio" name="q3" value="b"> b) Booleano</label>
            <label><input type="radio" name="q3" value="c"> c) Caracter</label>
            <label><input type="radio" name="q3" value="d"> d) Flotante</label>
        </div>

        <!-- Question 4 -->
        <div class="question">
            <p>4. ¿Cuál	es el resultado de echo "Hola" . " " . "Mundo";?</p>
            <label><input type="radio" name="q4" value="a"> a) HelloWorld</label>
            <label><input type="radio" name="q4" value="b"> b) Hola Mundo</label>
            <label><input type="radio" name="q4" value="c"> c) "Hola Mundo"</label>
        </div>

        <!-- Question 5 -->
        <div class="question">
            <p>5. En PHP, ¿qué bucle se utiliza para ejecutar un bloque de código un número especificado de veces?</p>
            <label><input type="radio" name="q5" value="a"> a) Bucle for</label>
            <label><input type="radio" name="q5" value="b"> b) Bucle while</label>
            <label><input type="radio" name="q5" value="c"> c) Bucle do...while</label>
            <label><input type="radio" name="q5" value="d"> d) Bucle foreach</label>
        </div>

        <!-- Question 6 -->
        <div class="question">
            <p>6. ¿Qué función de PHP se utiliza para abrir un archivo para escritura?</p>
            <label><input type="radio" name="q6" value="a"> a) fopen</label>
            <label><input type="radio" name="q6" value="b"> b) file_open</label>
            <label><input type="radio" name="q6" value="c"> c) open_file</label>
            <label><input type="radio" name="q6" value="d"> d) Ninguna de las anteriores</label>
        </div>

        <!-- Question 7 -->
        <div class="question">
            <p>7. ¿Cuál es el propósito de la superglobal $_GET en PHP?</p>
            <label><input type="radio" name="q7" value="a"> a) Recuperar datos de un formulario con el método POST</label>
            <label><input type="radio" name="q7" value="b"> b) Almacenar variables de sesión</label>
            <label><input type="radio" name="q7" value="c"> c) Recuperar datos de la cadena de consulta URL</label>
            <label><input type="radio" name="q7" value="d"> d) Definir constantes globales</label>
        </div>

        <!-- Question 8 -->
        <div class="question">
            <p>8. ¿Cuál de los siguientes es un ejemplo de constante mágica de PHP?</p>
            <label><input type="radio" name="q8" value="a"> a) $this</label>
            <label><input type="radio" name="q8" value="b"> b) LINE</label>
            <label><input type="radio" name="q8" value="c"> c) $var</label>
            <label><input type="radio" name="q8" value="d"> d) functionName()</label>
        </div>

        <!-- Question 9 -->
        <div class="question">
            <p>9. ¿Qué hace la función include en PHP?</p>
            <label><input type="radio" name="q9" value="a"> a) Ejecuta un bloque de código solo si una condición es verdadera</label>
            <label><input type="radio" name="q9" value="b"> b) Incluye y evalúa un archivo especificado</label>
            <label><input type="radio" name="q9" value="c"> c) Define una nueva función</label>
            <label><input type="radio" name="q9" value="d"> d) Genera un número aleatorio</label>
        </div>

        <!-- Question 10 -->
        <div class="question">
            <p>10. ¿Cuál de los siguientes se utiliza para crear un objeto en PHP?</p>
            <label><input type="radio" name="q10" value="a"> a) new</label>
            <label><input type="radio" name="q10" value="b"> b) objeto</label>
            <label><input type="radio" name="q10" value="c"> c) crear</label>
            <label><input type="radio" name="q10" value="d"> d) instancia</label>
        </div>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
