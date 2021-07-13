<?php
include("../includes/db.php");
include("../includes/header.php");
?>

<?php
if (isset($_POST['comprar'])) {
    $id_compra = $_POST["id_compra"];
    $id_usuario = $_POST["id_usuario"];
    $id_prov = $_POST["id_proveedor"];

    $query_1 = "INSERT INTO compra (id_compra, fk_id_admin, fk_id_proveedor) VALUES ('$id_compra', '$id_usuario', '$id_prov')";
    mysqli_query($conexion, $query_1);

?>





    <!--Formulario del detalle de la compra-->

    <div class="jumbotron">
        <div class="bg-secondary">
            <hr>
            <h4 style="text-align: center; color: white;">INFORMACIÓN ADICIONAL PARA EL REGISTRO DE LA COMPRA
            </h4>
            <hr>
        </div>

        <div class="card card-body bg-info">

            <h4 style="text-align: center; color: white;">DETALLE DE COMPRA</h4>

            <form action="confirmar_compra.php" method="POST">

                <div class="form-group">
                    <input type="text" name="id_det_compra" class="form-control" placeholder="Código Detalle Compra">
                </div>

                <div class="form-group">
                    <input type="text" name="fk_id_compra" class="form-control" placeholder="Código Compra">
                </div>

                <div class="form-group">
                    <input type="text" name="fk_id_prod_compra" class="form-control" placeholder="Código Producto">
                </div>

                <div class="form-group">
                    <input type="number" name="cantidad_comprada" class="form-control" placeholder="Cantidad Comprada">
                </div>

                <div class="form-group">
                    <input type="number" min="0" step="10" name="valor_unitario" class="form-control" placeholder="Valor Untario">
                </div>

                <div class="form-group">
                    <input type="number" min="0" step="10" name="valor_total" class="form-control" placeholder="Valor Total">
                </div>

                <input type="submit" class="btn btn-outline-light btn-secondary btn-block" name="guardar_detalle" value="Guardar Detalle Compra">

            </form>

        </div>

    <?php
} ?>