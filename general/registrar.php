<?php

include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Orden' . escapar($_POST['orden']) . ' ha sido agregada con éxito'
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

    $consultaSQL = "INSERT INTO orden ('0',numero_orden, nombre, fecha, sistema, marca, modelo, serie,
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
