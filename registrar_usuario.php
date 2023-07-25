<?php
include('conexion.php');
session_start();
if (isset($_POST['registrar'])) {

    date_default_timezone_set('America/Mexico_City');


    $id=0;
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $fecha_alta = date("Y-m-d h:i:s");
    $estado = 1;
    $query = $connection->prepare("SELECT * FROM usuarios WHERE correo=:correo");
    $query->bindParam("correo", $correo, PDO::PARAM_STR);
    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<p class="error">¡Este correo ya se encuentra registrado!</p>';
    }
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO usuarios('id','nombre','correo,'password','fecha_alta',estado)
        VALUES (:id,:nombre,:correo,:password_hash,:fecha_alta,:estado)");
        $query->bindParam("id", $id, PDO::PARAM_INT);
        $query->bindParam("nombre", $nombre, PDO::PARAM_STR);
        $query->bindParam("correo", $correo, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("fecha_alta", $fecha_alta, PDO::PARAM_STR);
        $query->bindParam("estado", $estado, PDO::PARAM_INT);
        $result = $query->execute();
        print($query);
        if ($result) {
            echo '<p class="success">Registro exitoso!</p>';
            header('Location: inicio.php');
        } else {
            echo '<p class="error">¡Error al registrarse!</p>';
            header('Location: registro.php');
        }
    }
}
?>