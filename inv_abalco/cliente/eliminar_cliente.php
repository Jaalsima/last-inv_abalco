<?php

include("../includes/db.php");

/*if ($_SESSION['rol'] == 1) {

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "DELETE FROM cliente WHERE id_cliente = '$id'";

        $resultado = mysqli_query($conexion, $query);

        if (!$resultado) {
            die("¡El cliente no ha sido eliminado!");
        }

        $_SESSION['mensaje_cli'] = '¡Cliente eliminado!';
        $_SESSION['tipo_de_mensaje_cli'] = 'danger';
        header("Location: cliente.php");
    }
} else {
    header("Location: ../inicio/error_2.php");
}*/

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM cliente WHERE id_cliente = '$id'";

    $resultado = mysqli_query($conexion, $query);

    if (!$resultado) {
        die("¡El cliente no ha sido eliminado!");
    } else {
        $_SESSION['mensaje_cli'] = '¡Cliente eliminado!';
        $_SESSION['tipo_mensaje_cli'] = 'danger';
        header("Location: cliente.php");
    }
}
