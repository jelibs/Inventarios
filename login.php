<?php

    require_once 'cone.php';
    session_start();

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * ";
    $sql .= "FROM usuarios ";
    $sql .= "WHERE correo = '". $correo ."'";

    $resultados = $conexion->query($sql);

    $fila = mysqli_fetch_assoc($resultados);

    $passwordHash = $fila['password'];
    $correo = $fila['correo'];
    if(password_verify($password, $passwordHash)){
        session_regenerate_id();
        $_SESSION['logueado'] = true;
        $_SESSION['name'] = $correo;
        header("Location: inicio.php");
    }else{
        $_SESSION['logueado'] = false;
        header("Location: index.php");
    }
    mysql_close($conexion);
?>