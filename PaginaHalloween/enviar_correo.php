<?php

include "variables_globales.php";
$error = "";
$mensaje = "";
$emailUsuario = "";
$usuarioConectado = false;

foreach ($_SESSION["mimatriz"] as $usuario) {

    if ($usuario["UsuarioActual"] == true) {

        $emailUsuario = $usuario["Email"];
        $usuarioConectado = true;

    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $usuarioConectado) {

    $asunto = trim($_POST["asunto"]);
    $contenido = trim($_POST["mensaje"]);

    if ($asunto == "" || $contenido == "") {

        $error = "Debes rellenar todos los campos.";

    } else {

        $destinatario = "correo_de_jack@yahoo.com";
        $cabecera = "From: " . $emailUsuario . "\r\n";
        $cabecera .= "Content-Type: text/plain; charset=UTF-8";

        if (mail($destinatario, $asunto, $contenido, $cabecera)) {

            $mensaje = "¡Tu mensaje se ha enviado correctamente a Jack!";

        } else {

            $error = "No se ha podido enviar el correo. Comprueba la configuración de XAMPP.";

        }

    }

}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Enviar correo | El Caldero Maldito</title>

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

            <h2>💌 Escribe a Jack Skellington</h2>

            <p>
                ¿Tienes alguna pesadilla que contarle a Jack?
                Envíale un mensaje.
            </p>

            <?php if (!$usuarioConectado) { ?>

                <p style="color: #ff8c42;">
                    Debes iniciar sesión para enviar un correo.
                </p>

                <a href="iniciar_sesion.php" class="boton">
                    Iniciar sesión
                </a>

            <?php } else { ?>

                <form action="enviar_correo.php" method="POST">

                    <label for="email">
                        Tu correo electrónico:
                    </label>

                    <input
                        type="email"
                        id="email"
                        value="<?php echo htmlspecialchars($emailUsuario); ?>"
                        readonly
                    >

                    <label for="asunto">
                        Asunto:
                    </label>

                    <input
                        type="text"
                        id="asunto"
                        name="asunto"
                        required
                    >

                    <label for="mensaje">
                        Mensaje:
                    </label>

                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="6"
                        required
                    ></textarea>

                    <button type="submit" class="boton">
                        Enviar mensaje
                    </button>

                </form>

            <?php } ?>

            <?php if ($error != "") { ?>

                <p style="color: #ff8c42;">
                    <?php echo htmlspecialchars($error); ?>
                </p>

            <?php } ?>

            <?php if ($mensaje != "") { ?>

                <p style="color: lightgreen;">
                    <?php echo htmlspecialchars($mensaje); ?>
                </p>

            <?php } ?>

        </section>

    </main>

    <footer>

        <p>🎃 El Caldero Maldito</p>

    </footer>

</body>

</html>