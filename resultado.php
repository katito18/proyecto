<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Encuesta</title>
    <link rel="stylesheet" href="r.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Página principal</a></li>
                <li><a href="formulario.html">Regresar a la encuesta</a></li>
            </ul>
        </nav>
    </header>

    <main class="resultado-container">
        <h1>¡Gracias por compartir tus respuestas!</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre = htmlspecialchars($_POST['nombre']);
            $edad = htmlspecialchars($_POST['edad']);
            $grupo = htmlspecialchars($_POST['grupo']);
            $residuo = htmlspecialchars($_POST['residuo_frecuente']);
            $separas = htmlspecialchars($_POST['separas']);
            $accion = htmlspecialchars($_POST['accion']);
            $comentario = htmlspecialchars($_POST['comentario']);

            echo "<div class='card-resultado'>";
            echo "<p><strong>Nombre del estudiante:</strong> $nombre</p>";
            echo "<p><strong>Edad:</strong> $edad años</p>";
            echo "<p><strong>Grupo escolar:</strong> $grupo </p>";
            echo "<p>El residuo que produces con más frecuencia es: <strong>$residuo</strong>.</p>";
            echo "<p>Tu respuesta sobre la separación de residuos fue: <strong>$separas</strong>.</p>";
            echo "<p>La actividad que elegiste para proteger el medio ambiente es: <strong>$accion</strong>.</p>";
            if (!empty($comentario)) {
                echo "<p><strong>Tu opinión:</strong> \"$comentario\"</p>";
            }
            echo "<br><p class='destacado'>¡Gracias por participar! Recuerda que separar los residuos y reciclar ayuda a mantener limpia nuestra escuela y a proteger el planeta.</p>";
            echo "</div>";
        } else {
            echo "<p>No se encontraron respuestas de la encuesta.</p>";
        }
        ?>

        <br>
        <a href="index.html" class="btn-volver">Volver a la página principal</a>
    </main>
</body>
</html>