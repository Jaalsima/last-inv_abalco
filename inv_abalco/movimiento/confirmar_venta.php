<?php
include("../includes/db.php");
?>

<?php

if (isset($_POST['guardar_detalle'])) {
    $id_det_venta = $_POST["id_det_venta"];
    $fk_id_venta = $_POST["fk_id_venta"];
    $fk_id_prod_venta = $_POST["fk_id_prod_venta"];
    $cantidad_vendida = $_POST["cantidad_vendida"];
    $valor_unitario = $_POST["valor_unitario"];
    $valor_total = $_POST["valor_total"];

    $query_2 = "UPDATE producto SET cantidad = (cantidad - $cantidad_vendida) WHERE id_prod = '$fk_id_prod_venta'";
    mysqli_query($conexion, $query_2);

    $query_3 = "INSERT INTO detalle_venta (id_det_venta, fk_id_venta, fk_id_prod_venta, cantidad_vendida, valor_unitario, valor_total) VALUES ('$id_det_venta', '$fk_id_venta', '$fk_id_prod_venta', '$cantidad_vendida', '$valor_unitario', '$valor_total')";
    mysqli_query($conexion, $query_3);

    $_SESSION['mensaje_venta'] = "¡La información de la venta ha sido guardada exitosamente!";
    $_SESSION['tipo_mensaje_venta'] = 'success';
    header("location: venta.php"); 
} else{
    die("¡La venta no se ha podido completar con éxito!");
    $_SESSION['mensaje_venta'] = "¡La información de la venta no ha sido registrada correctamente!";
    $_SESSION['tipo_mensaje_venta'] = 'danger';
    header("location: venta.php"); 

}
?>