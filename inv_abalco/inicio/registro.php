<?php
include("../includes/header.php");
?>

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

      <li class="nav-item active">
        <a class="nav-link" href="../inicio/login.php">USUARIOS<span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="..//movimiento/compra.php">COMPRAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../movimiento/venta.php">VENTAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../movimiento/registro.php">REGISTRO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../movimiento/inventario.php">INVENTARIO</a>
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
      <button class="btn btn-inline-primary btn-sm btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

  </div>

</nav>

<div class="container jumbotron">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <div class="row bg-secondary">
        <div class="col-lg-5 d-none d-lg-block"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4 text-light">REGISTRO DE USUARIO</h1>
              <!--Formulario para registro de usuarios -->
            </div>
            <form action="confirmar_user.php" method="POST">

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="doc_usuario" name="id" placeholder="Documento Identidad" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="nombre" name="nombre" placeholder="Nombre" required>
              </div>

              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="apellido" name="apellido" placeholder="Apellido" required>
              </div>

              <div class="form-group">
                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Correo Electrónico" required>
              </div>

              <div class="form-group">
                <input type="password" class="form-control form-control-user" id="contra" name="contra" placeholder="Contraseña" required>
              </div>

              <div class="form-group">
                <input type="number" min="1" max="2" class="form-control form-control-user" id="rol" name="rol" placeholder="Tipo de Usuario" required>
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-info btn-user btn-block" id="registrar" name="registrar" value="Registrar Usuario">
              </div>

              <hr>

            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

</div>

<?php
include("../includes/footer.php");
?>