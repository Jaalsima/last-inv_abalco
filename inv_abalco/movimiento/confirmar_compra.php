<?php
include("../includes/db.php");
?>

<?php

if (isset($_POST['guardar_detalle'])) {
    $id_det_compra = $_POST["id_det_compra"];
    $fk_id_compra = $_POST["fk_id_compra"];
    $fk_id_prod_compra = $_POST["fk_id_prod_compra"];
    $cantidad_comprada = $_POST["cantidad_comprada"];
    $valor_unitario = $_POST["valor_unitario"];
    $valor_total = $_POST["valor_total"];

    $query_2 = "UPDATE producto SET cantidad = (cantidad + $cantidad_comprada) WHERE id_prod = '$fk_id_prod_compra'";
    mysqli_query($conexion, $query_2);

    $query_3 = "INSERT INTO detalle_compra (id_det_compra, fk_id_compra, fk_id_prod_compra, cantidad_comprada, valor_unitario, valor_total) VALUES ('$id_det_compra', '$fk_id_compra', '$fk_id_prod_compra', '$cantidad_comprada', '$valor_unitario', '$valor_total')";
    mysqli_query($conexion, $query_3);

    $_SESSION['mensaje_compra'] = "¡La información de la compra ha sido guardada exitosamente!";
    $_SESSION['tipo_mensaje_compra'] = 'success';
    header("location: compra.php"); 
} else{
    die("¡La compra no se ha podido completar con éxito!");
    $_SESSION['mensaje_compra'] = "¡La información de la compra no ha sido registrada correctamente!";
    $_SESSION['tipo_mensaje_compra'] = 'danger';
    header("location: compra.php"); 

}
?>