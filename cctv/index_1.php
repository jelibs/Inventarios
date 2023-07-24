<?php
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$error = false;
$config = include 'config.php';

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

  if (isset($_POST['placa'])) {
    $consultaSQL = "SELECT * FROM cctv WHERE placa LIKE '%" . $_POST['placa'] . "%'";
  } else {
    $consultaSQL = "SELECT * FROM cctv";
  }

  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $placas = $sentencia->fetchAll();

} catch(PDOException $error) {
  $error= $error->getMessage();
}

$titulo = isset($_POST['placa']) ? 'Lista de inventario cctv (' . $_POST['placa'] . ')' : 'Lista de inventario cctv';
?>

<?php include "templates/header.php"; ?>

<?php
if ($error) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $error ?>
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
      <a href="crear.php"  class="btn btn-primary mt-4">Registrar inventario CCTV</a>
      <a href="../inicio.php"  class="btn btn-primary mt-4">Ir a inicio</a>
      <hr>
      <form method="post" class="form-inline">
        <div class="form-group mr-3">
          <input type="text" id="placa" name="placa" placeholder="Buscar por placa" class="form-control">
        </div>
        <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
        <button type="submit" name="submit" class="btn btn-primary">Buscar</button>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="mt-3"><?= $titulo ?></h2>
      <table class="table">
        <thead>
          <tr>
            <th>Placa</th>
            <th>Videograbador</th>
            <th>SD 1</th>
            <th>SD 2</th>
            <th>Cámara interior</th>
            <th>Cámara exterior</th>
            <th>SIM</th>
            <th>Línea</th>
            <th>Orden de servicio</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($placas && $sentencia->rowCount() > 0) {
            foreach ($placas as $fila) {
              ?>
              <tr>
                <td><?php echo escapar($fila["placa"]); ?></td>
                <td><?php echo escapar($fila["videograbador"]); ?></td>
                <td><?php echo escapar($fila["sd_1"]); ?></td>
                <td><?php echo escapar($fila["sd_2"]); ?></td>
                <td><?php echo escapar($fila["cam_int"]); ?></td>
                <td><?php echo escapar($fila["cam_ext"]); ?></td>
                <td><?php echo escapar($fila["sim"]); ?></td>
                <td><?php echo escapar($fila["linea"]); ?></td>
                <td><?php echo escapar($fila["orden"]); ?></td>
                <!-- <td>
                 <a href="<?= 'borrar.php?id=' . escapar($fila["placa"]) ?>">🗑️Borrar</a>
                  <a href="<?= 'editar.php?id=' . escapar($fila["placa"]) ?>">✏️Editar</a>
                </td> -->
              </tr>
              <?php
            }
          }
          ?>
        <tbody>
      </table>
    </div>
  </div>
</div>

<?php include "templates/footer.php"; ?>