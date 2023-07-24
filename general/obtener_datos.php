<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=proyectos','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM orden";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($id,$numero_orden, $nombre, $fecha, $sistema, 
    $marca, $modelo, $serie, $defectos, $descripcion, $observacion, $proyecto, $estatus) => 
    [$id, $numero_orden,$nombre, $fecha, $sistema, $marca, $modelo, $serie, $defectos, $descripcion, 
    $observacion, $proyecto, $estatus] );

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}