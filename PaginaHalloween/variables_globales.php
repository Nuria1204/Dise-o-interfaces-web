<?php

session_start();

if (!isset($_SESSION['mimatriz'])) {

    $_SESSION['mimatriz'] = array(

        array(
            "Usuario" => "admin",
            "Contraseña" => password_hash("Halloween123!", PASSWORD_DEFAULT),
            "Email" => "admin@calderomaldito.com",
            "Perfil" => "admin",
            "Pregunta" => "calabaza",
            "UsuarioActual" => false
        )

    );

}

function currentUser($nombreUsuario) {

    foreach ($_SESSION['mimatriz'] as &$usuario) {

        $usuario["UsuarioActual"] = false;

        if ($usuario["Usuario"] == $nombreUsuario) {
            $usuario["UsuarioActual"] = true;
        }

    }

    unset($usuario);

}

function AltaUsuarios($nombre, $contrasena, $email, $pregunta) {

    foreach ($_SESSION['mimatriz'] as $usuario) {

        if ($usuario["Usuario"] == $nombre) {
            return false;
        }

    }

    $nuevoUsuario = array(
        "Usuario" => $nombre,
        "Contraseña" => password_hash($contrasena, PASSWORD_DEFAULT),
        "Email" => $email,
        "Perfil" => "user",
        "Pregunta" => $pregunta,
        "UsuarioActual" => false
    );

    $_SESSION['mimatriz'][] = $nuevoUsuario;

    return true;

}

function redirect($url) {

    header("Location: " . $url);
    exit;

}

?>