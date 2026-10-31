<?php

include "variables_globales.php";

$error = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["usuario"]);
    $pregunta = trim($_POST["pregunta"]);
    $contrasena = $_POST["contrasena"];

    $encontrado = false;

    foreach ($_SESSION["mimatriz"] as &$usuario) {

        if (
            $usuario["Usuario"] == $nombre &&
            $usuario["Pregunta"] == $pregunta
        ) {

            $usuario["Contraseña"] = password_hash(
                $contrasena,
                PASSWORD_DEFAULT
            );

            $encontrado = true;

            $mensaje = "¡Contraseña cambiada correctamente!";

            break;

        }

    }

    unset($usuario);

    if (!$encontrado) {

        $error = "El usuario o la respuesta de seguridad son incorrectos.";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cambiar contraseña | El Caldero Maldito</title>

    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>

    <header>

        <h1>🎃 El Caldero Maldito</h1>

        <nav>
            <a href="inicio.html">Inicio</a>
            <a href="sobre_nosotros.html">Sobre nosotros</a>
            <a href="recetas.html">Recetas</a>
            <a href="juego.html">Juego</a>
            <a href="iniciar_sesion.php">Iniciar sesión</a>
        </nav>

    </header>

    <main>

        <section class="portada">

            <h2>🔐 Cambiar contraseña</h2>

            <p>
                Recupera el acceso a tu cuenta respondiendo
                a tu pregunta de seguridad.
            </p>

            <form action="cambiar_contrasena.php" method="POST">

                <label for="usuario">Nombre de usuario:</label>

                <input
                    type="text"
                    id="usuario"
                    name="usuario"
                    required
                >

                <label for="pregunta">Respuesta de seguridad:</label>

                <input
                    type="text"
                    id="pregunta"
                    name="pregunta"
                    required
                >

                <label for="contrasena">Nueva contraseña:</label>

                <input
                    type="password"
                    id="contrasena"
                    name="contrasena"
                    required
                >

                <button type="submit" class="boton">
                    Cambiar contraseña
                </button>

            </form>

            <?php if ($error != "") { ?>

                <p style="color: #ff8c42;">
                    <?php echo htmlspecialchars($error); ?>
                </p>

            <?php } ?>

            <?php if ($mensaje != "") { ?>

                <p style="color: lightgreen;">
                    <?php echo htmlspecialchars($mensaje); ?>
                </p>

                <a href="iniciar_sesion.php" class="boton">
                    Iniciar sesión
                </a>

            <?php } ?>

        </section>

    </main>

    <footer>

        <p>🎃 El Caldero Maldito</p>

    </footer>

</body>

</html>
