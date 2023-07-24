<?php

include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Orden ' . escapar($_POST['numero_orden']) . ' ha sido agregada con éxito'
  ];

  $config = include 'config.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $new_orden = [
      "numero_orden"   => $_POST['numero_orden'],
      "nombre" => $_POST['nombre'],
      "fecha"    => $_POST['fecha'],
      "sistema"     => $_POST['sistema'],
      "marca"     => $_POST['marca'],
      "modelo"     => $_POST['modelo'],
      "serie"     => $_POST['serie'],
      "defectos"     => $_POST['defectos'],
      "descripcion"     => $_POST['descripcion'],
      "observacion"     => $_POST['observacion'],
      "proyecto"     => $_POST['proyecto'],
      "estatus"     => $_POST['estatus']
    ];

    $consultaSQL = "INSERT INTO orden (numero_orden, nombre, fecha, sistema, marca, modelo, serie,
    defectos, descripcion, observacion, proyecto, estatus)";
    $consultaSQL .= "values (:" . implode(", :", array_keys($new_orden)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($new_orden);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}
?>

<?php include 'templates/header.php'; ?>

<?php
if (isset($resultado)) {
  ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php include 'templates/header.php'; ?>

<?php
if (isset($resultado)) {
  ?>
  <div class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-<?= $resultado['error'] ? 'danger' : 'success' ?>" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<div class="container fluid">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Registrar orden de servicio </h2>
      <hr>
      <form method="post" class="col-md-12">
  
        <div class="row 3">
        <div class="col-3">
          <label for="numero_orden">Número de orden</label>
          <input type="text" name="numero_orden" id="numero_orden" class="form-control">
        </div>
        </div>

        <div class="form-group">
          <label for="nombre">Nombre del cliente</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="form-group">
          <label for="fecha">Fecha</label>
          <input type="date" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
          <label for="sistema">Sistema</label>
          <input type="text" name="sistema" id="sistema" class="form-control">
        </div>
        <div class="form-group">
          <label for="marca">Marca</label>
          <input type="text" name="marca" id="marca" class="form-control">
        </div>
        <div class="form-group">
          <label for="modelo">Modelo</label>
          <input type="text" name="modelo" id="modelo" class="form-control">
        </div>
        <div class="form-group">
          <label for="serie">Serie</label>
          <input type="text" name="serie" id="serie" class="form-control">
        </div>
        <div class="form-group">
          <label for="defectos">Defectos</label>
          <input type="text" name="defectos" id="defectos" class="form-control">
        </div>
        <div class="form-group">
          <label for="descripcionobservacion">Descripción</label>
          <input type="text" name="descripcion" id="descripcion" class="form-control">
        </div>
        <div class="form-group">
          <label for="observacion">Observación</label>
          <input type="text" name="observacion" id="observacion" class="form-control">
        </div>
        <div class="form-group">
          <label for="proyecto">Proyecto</label>
          <input type="text" name="proyecto" id="proyecto" class="form-control">
        </div>
        <div class="form-group">
          <label for="estatus">Estatus</label>
          <input type="text" name="estatus" id="estatus" class="form-control">
        </div>
        <div class="form-group">
          <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
          <input type="submit" name="submit" class="btn btn-primary" value="Guardar">

          <a class="btn btn-info" href="index.php">Volver al inicio</a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>