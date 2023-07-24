<?php
include 'funciones.php';

csrf();
if (isset($_POST['submit']) && !hash_equals($_SESSION['csrf'], $_POST['csrf'])) {
  die();
}

$config = include 'config.php';

$resultado = [
  'error' => false,
  'mensaje' => ''
];

if (!isset($_GET['placa'])) {
  $resultado['error'] = true;
  $resultado['mensaje'] = 'La placa no se encuentra registrada';
}

if (isset($_POST['submit'])) {
  try {
    $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
    $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);

    $nuevo_cctv = [
      "placa"        => $_GET['placa'],
      "videograbador"    => $_POST['videograbador'],
      "sd_1"  => $_POST['sd_1'],
      "sd_2"     => $_POST['sd_2'],
      "cam_int"      => $_POST['cam_int'],
      "cam_ext"      => $_POST['cam_ext'],
      "sim"      => $_POST['sim'],
      "linea"      => $_POST['linea'],
      "orden"      => $_POST['orden']
    ];
    
    $consultaSQL = "UPDATE cctv SET
        placa = :placa,
        videograbador = :videograbador,
        sd_1 = :sd_1,
        sd_2 = :sd_2,
        cam_int = :cam_int,
        cam_ext = :cam_ext,
        sim = :sim,
        linea = :linea,
        orden = :orden
        WHERE placa = :placa";
    $consulta = $conexion->prepare($consultaSQL);
    $consulta->execute($nuevo_cctv);

  } catch(PDOException $error) {
    $resultado['error'] = true;
    $resultado['mensaje'] = $error->getMessage();
  }
}

try {
  $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
  $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
    
  $placa = $_GET['id'];
  print($placa);
  $consultaSQL = 'SELECT * FROM cctv WHERE placa ='  .$placa;

  $sentencia = $conexion->prepare($consultaSQL);
  $sentencia->execute();

  $nuevo_cctv = $sentencia->fetch(PDO::FETCH_ASSOC);

  if (!$nuevo_cctv) {
    $resultado['error'] = true;
    $resultado['mensaje'] = 'No se ha encontrado el registro';
  }

} catch(PDOException $error) {
  $resultado['error'] = true;
  $resultado['mensaje'] = $error->getMessage();
}
?>

<?php require "templates/header.php"; ?>

<?php
if ($resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
          <?= $resultado['mensaje'] ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php
if (isset($_POST['submit']) && !$resultado['error']) {
  ?>
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-success" role="alert">
          El registro se ha actualizado exitosamente
        </div>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php
if (isset($nuevo_cctv) && $nuevo_cctv) {
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mt-4">Editando la placa <?= escapar($nuevo_cctv['placa']) . ' ' . escapar($nuevo_cctv['placa'])  ?></h2>
        <hr>
        <form method="post">
          <div class="form-group">
            <label for="placa">Placa</label>
            <input type="text" name="placa" id="placa" value="<?= escapar($nuevo_cctv['placa']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="videograbador">Videograbador</label>
            <input type="text" name="videograbador" id="videograbador" value="<?= escapar($nuevo_cctv['videograbador']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="sd_1">Tarjeta SD 1</label>
            <input type="text" name="sd_1" id="sd_1" value="<?= escapar($nuevo_cctv['sd_1']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="sd_2">Tarjeta SD 2</label>
            <input type="text" name="sd_2" id="sd_2" value="<?= escapar($nuevo_cctv['sd_2']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="cam_int">Cámara interior</label>
            <input type="text" name="cam_int" id="cam_int" value="<?= escapar($nuevo_cctv['cam_int']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="cam_ext">Cámara exterior</label>
            <input type="text" name="cam_ext" id="cam_ext" value="<?= escapar($nuevo_cctv['cam_ext']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="sim">SIM</label>
            <input type="text" name="sim" id="sim" value="<?= escapar($nuevo_cctv['sim']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="linea">Línea</label>
            <input type="text" name="linea" id="linea" value="<?= escapar($nuevo_cctv['linea']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <label for="orden">Orden de Servicio</label>
            <input type="text" name="orden" id="orden" value="<?= escapar($nuevo_cctv['orden']) ?>" class="form-control">
          </div>
          <div class="form-group">
            <input name="csrf" type="hidden" value="<?php echo escapar($_SESSION['csrf']); ?>">
            <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
            <a class="btn btn-primary" href="index.php">Regresar al inicio</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
}
?>

<?php require "templates/footer.php"; ?>