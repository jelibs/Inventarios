<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=proyectos','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM cctv";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($placa, $videograbador, 
    $sd_1, $sd_2, $cam_int, $cam_ext, $sim, $linea, $orden) => [$placa, $videograbador, 
    $sd_1, $sd_2, $cam_int, $cam_ext, $sim, $linea, $orden] );

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}