<?php

include "variables_globales.php";

$error = "";
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["usuario"]);
    $contrasena = $_POST["contrasena"];
    $email = trim($_POST["email"]);
    $pregunta = trim($_POST["pregunta"]);


    if (AltaUsuarios($nombre, $contrasena, $email, $pregunta)) {

        $mensaje = "¡Usuario registrado correctamente!";

    } else {

        $error = "Ese nombre de usuario ya existe.";

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crear cuenta | El Caldero Maldito</title>

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

            <h2>🧙 Crear una cuenta</h2>

            <p>
                Regístrate para descubrir todos los secretos
                de El Caldero Maldito.
            </p>

            <form action="registrar_usuario.php" method="POST">

                <label for="usuario">Nombre de usuario:</label>

                <input
                    type="text"
                    id="usuario"
                    name="usuario"
                    required
                >

                <label for="contrasena">Contraseña:</label>

                <input
                    type="password"
                    id="contrasena"
                    name="contrasena"
                    required
                >

                <label for="email">Correo electrónico:</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    required
                >

                <label for="pregunta">Respuesta de seguridad:</label>

                <input
                    type="text"
                    id="pregunta"
                    name="pregunta"
                    required
                >

                <button type="submit" class="boton">
                    Crear cuenta
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

            <p>
                ¿Ya tienes una cuenta?
            </p>

            <a href="iniciar_sesion.php" class="boton">
                Volver al inicio de sesión
            </a>

        </section>

    </main>

    <footer>

        <p>🎃 El Caldero Maldito</p>

    </footer>

</body>

</html>
