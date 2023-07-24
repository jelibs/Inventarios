<?php

include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

if (isset($_POST['submit'])) {
  $resultado = [
    'error' => false,
    'mensaje' => 'El registro de la unidad ' . escapar($_POST['placa']) . ' ha sido agregado con éxito'
  ];

  $config = include 'config.php';

  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $new_gps = [
      "placa"   => $_POST['placa'],
      "gps" => $_POST['gps'],
      "equipo"    => $_POST['equipo'],
      "sim"     => $_POST['sim'],
      "linea"     => $_POST['linea'],
      "orden"     => $_POST['orden']
    ];

    $consultaSQL = "INSERT INTO gps (placa, gps, equipo, sim, linea, orden)";
    $consultaSQL .= "values (:" . implode(", :", array_keys($new_gps)) . ")";

    $sentencia = $conexion->prepare($consultaSQL);
    $sentencia->execute($new_gps);

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

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-4">Crea regisro GPS</h2>
      <hr>
      <form method="post">
        <div class="form-group">
          <label for="placa">Placa</label>
          <input type="text" name="placa" id="placa" Placeholder="EJEMPLO: TL-003A-1" required autocomplete="off" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90) || (event.charCode==45))" min="9" maxlength="10" class="form-control">
        </div>
        <div class="form-group">
          <label for="gps">GPS</label>
          <input type="text" name="gps" id="gps" class="form-control">
        </div>
        <div class="form-group">
          <label for="equipo">Equipo</label>
          <input type="text" name="equipo" id="equipo" class="form-control">
        </div>
        <div class="form-group">
          <label for="sim">SIM</label>
          <input type="text" name="sim" id="sim" placeholder="EJEMPLO: 8952050002228239629F" required autocomplete="off" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode >= 65 && event.charCode <= 90))" min="20" maxlength="20" class="form-control">
        </div>
        <div class="form-group">
          <label for="linea">Línea</label>
          <input type="text" name="linea" id="linea" required autocomplete="off" placeholder="EJEMPLO: 2361268596" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="10" maxlength="10"class="form-control">
        </div>
        <div class="form-group">
          <label for="orden">Orden de servicio</label>
          <input type="text" name="orden" id="orden"required autocomplete="off" placeholder="EJEMPLO: 21-3018,22-1545,22-1516 (NO USAR ESPACIOS)" onkeypress="return ((event.charCode >= 48 && event.charCode <= 57) || (event.charCode==44) || (event.charCode==45))" min="7" maxlength="40"class="form-control">
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