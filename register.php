<?php

include './general/funciones.php';

// csrf();
// if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
//   die();
// }

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'Registro exitoso' . escapar($_POST['submit']) . ' ha sido agregada con éxito'
  ];

  $config = include './general/config.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    print($password);
    $estado = 1;
    $fecha_alta = date("d-m-Y h:i:s");
    $new_orden = [
      "nombre"   => $_POST['nombre'],
      "correo"     => $_POST['correo'],
      "contrasena"     => $password,
      "fecha_alta"     => $fecha_alta,
      "estatus"     => $estado
    ];

    $consultaSQL = "INSERT INTO usuarios(nombre, correo, password, fecha_alta, estado)";
    $consultaSQL .= "values (:" . implode(", :", array_keys($new_orden)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($new_orden);
  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
  header('Location index.php');
}
?>

<?php include './general/templates/header.php'; ?>

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
