<?php
include("../includes/db.php");
include("../includes/header.php");
?>

<!--Barra de navegación-->

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="#"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="../inicio/index.php">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../producto/producto.php">PRODUCTOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../proveedor/proveedor.php">PROVEEDORES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../cliente/cliente.php">CLIENTES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../movimiento/compra.php">COMPRAS</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="../movimiento/venta.php">VENTAS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../movimiento/registro.php">REGISTRO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../movimiento/inventario.php">INVENTARIO</a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-1" type="search" placeholder="Búsqueda" aria-label="Search">
            <button class="btn btn-sm btn-outline-light btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>

    </div>

</nav>

<div class="container-fluid p-4 jumbotron" style="margin-top: 50px;">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <?php if (isset($_SESSION["mensaje_venta"])) { ?>
                <div class="alert alert-<?= $_SESSION["tipo_mensaje_venta"] ?> alert-dismissible fade show" role="alert">

                    <?= $_SESSION["mensaje_venta"] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            } ?>

            <!--Formulario de venta-->

            <div class="card card-body bg-info">
                <h5 style="text-align: center; color: white;">VENTA</h5>

                <form action="detalle_venta.php" method="POST">

                    <div class="form-group">
                        <input type="text" name="id_venta" class="form-control" placeholder="Código Venta">
                    </div>

                    <div class="form-group">
                        <input type="text" name="id_usuario" class="form-control" placeholder="Identificación Usuario">
                    </div>

                    <div class="form-group">
                        <input type="text" name="id_cliente" class="form-control" placeholder="Identificación Cliente">
                    </div>

                    <input type="submit" class="btn btn-outline-light btn-secondary btn-block" name="vender" value="Guardar Venta">

                </form>

            </div>
        </div>
    </div>
</div>

<?php
include("../includes/footer.php");
?>