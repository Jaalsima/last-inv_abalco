<?php
include("../includes/db.php");

/*if ($_SESSION['rol'] == 1) {

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "DELETE FROM producto WHERE id_prod = '$id'";
        $resultado = mysqli_query($conexion, $query);
        if (!$resultado) {
            die("¡El producto no ha sido eliminado!");
        } else {
            $_SESSION['mensaje'] = '¡Producto eliminado!';
            $_SESSION['tipo_de_mensaje'] = 'danger';
            header("Location: producto.php");
        }
    }
} else {
    header("Location: ../inicio/error_2.php");
}*/

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $query = "DELETE FROM producto WHERE id_prod = '$id'";
    $resultado = mysqli_query($conexion, $query);
    if (!$resultado) {
        die("¡El producto no ha sido eliminado!");
    } else {
        $_SESSION['mensaje_prod'] = '¡Producto eliminado!';
        $_SESSION['tipo_mensaje_prod'] = 'danger';
        header("Location: producto.php");
    }
}

