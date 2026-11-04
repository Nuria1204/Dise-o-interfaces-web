<?php

include "variables_globales.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = trim($_POST["usuario"]);
    $contrasena = $_POST["contrasena"];

    $encontrado = false;

    foreach ($_SESSION['mimatriz'] as $usuario) {

        if (
            $usuario["Usuario"] == $nombre &&
            password_verify($contrasena, $usuario["Contraseña"])
        ) {

            currentUser($nombre);

            $encontrado = true;

            redirect("inicio.html");

        }

    }

    if (!$encontrado) {
        $error = "El usuario o la contraseña son incorrectos.";
    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión | El Caldero Maldito</title>

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
            <a href="enviar_correo.php">Enviar correo</a>
        </nav>

    </header>

    <main>

        <section class="portada">

            <h2>🔐 Iniciar sesión</h2>

            <p>
                Entra en El Caldero Maldito y descubre todos sus secretos.
            </p>

            <form action="iniciar_sesion.php" method="POST">

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

                <button type="submit" class="boton">
                    Iniciar sesión
                </button>

                <?php if ($error != "") { ?>

                    <p style="color: #ff8c42;">
                        <?php echo htmlspecialchars($error); ?>
                    </p>

                <?php } ?>

            </form>

            <p>
                ¿Todavía no tienes una cuenta?
            </p>

            <a href="registrar_usuario.php" class="boton">
                Crear cuenta
            </a>

            <br>

            <a href="cambiar_contrasena.php" class="boton">
                Cambiar contraseña
            </a>

        </section>

    </main>

    <footer>

        <p>🎃 El Caldero Maldito</p>

    </footer>

</body>

</html>