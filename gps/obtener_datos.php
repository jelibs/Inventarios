<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=proyectos','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM gps";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($placa, $gps, 
    $equipo, $sim, $linea, $orden) => [$placa, $gps, 
    $equipo, $sim, $linea, $orden] );

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}