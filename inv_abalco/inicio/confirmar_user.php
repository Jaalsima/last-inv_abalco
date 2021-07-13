<?php
include("../includes/db.php");
include("../includes/header.php");

if (isset($_POST["registrar"])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $contra = $_POST["contra"];
    $rol = $_POST["rol"];

    $query = "INSERT INTO usuario (id_usuario, nombre_usuario, apellido_usuario, email_usuario, contra_usuario, fk_id_rol) VALUES ('$id', '$nombre', '$apellido', '$email', sha1('$contra'), '$rol')";
    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die();
        header("Location: ../inicio/error_2.php");
    } else {
        $_SESSION["mensaje_user"] = "¡Usuario Guardado Exitosamente!";
        $_SESSION["tipo_mensaje_user"] = "success";
        header("Location: ../inicio/index.php");
    }
} ?>