<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=proyectos','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM usuarios";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($id, $nombre, $correo, $password) => [$id, $nombre, $correo, $password] );

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}