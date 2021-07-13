<?php
include("../includes/db.php");
include("../includes/header.php");
?>

<?php
if (isset($_POST['vender'])) {
    $id_venta = $_POST["id_venta"];
    $id_usuario = $_POST["id_usuario"];
    $id_cliente = $_POST["id_cliente"];

    $query_1 = "INSERT INTO venta (id_venta, fk_id_vendedor, fk_id_cliente) VALUES ('$id_venta', '$id_usuario', '$id_cliente')";
    mysqli_query($conexion, $query_1);

?>

    <!--Formulario del detalle de la venta-->

    <div class="jumbotron">
        <div class="bg-secondary">
        <hr>
            <h4 style="text-align: center; color: white;">INFORMACIÓN ADICIONAL PARA EL REGISTRO DE LA VENTA
            </h4>
            <hr>
        </div>

        <div class="card card-body bg-info">
            <h4 style="text-align: center; color: white;">DETALLE DE VENTA</h4>

            <form action="confirmar_venta.php" method="POST">

                <div class="form-group">
                    <input type="text" name="id_det_venta" class="form-control" placeholder="Código Detalle Venta">
                </div>

                <div class="form-group">
                    <input type="text" name="fk_id_venta" class="form-control" placeholder="Código Venta">
                </div>

                <div class="form-group">
                    <input type="text" name="fk_id_prod_venta" class="form-control" placeholder="Código Producto">
                </div>

                <div class="form-group">
                    <input type="number" name="cantidad_vendida" class="form-control" placeholder="Cantidad Vendida">
                </div>

                <div class="form-group">
                    <input type="number" min="0" step="10" name="valor_unitario" class="form-control" placeholder="Valor Untario">
                </div>

                <div class="form-group">
                    <input type="number" min="0" step="10" name="valor_total" class="form-control" placeholder="Valor Total">
                </div>

                <input type="submit" class="btn btn-outline-light btn-secondary btn-block" name="guardar_detalle" value="Guardar Detalle Venta">

            </form>

        </div>
    </div>

<?php
} ?>