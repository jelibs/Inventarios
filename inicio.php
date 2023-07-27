<?php


// confirmar sesion
session_start();
if (!isset($_SESSION['logueado'])) {
    $_SESSION['name'] = $_POST['correo'];
    header('Location: index.php');
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="shortcut icon" href="./favicon.ico"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="loggedin">
    <nav class="navtop">
        <h1 style="color:white;" align="right">¡Bienvendo! <?= $_SESSION['name']?></h1>
        <a href="cerrar-sesion.php" style="color:white;" align="center"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
    </nav>

    <div class="content">
        <h1>¡Registros!</h1>

<table class="default">
    <tr>
        <td><a href="gps">GPS - Tlaxcala</a></td>

    </tr>
    <tr>
        <td><a href="cctv">CCTV - Tlaxcala</a></td>
    </tr>
    <tr>
        <td><a href="general">Mostrar todas las ordenes de servicio</a></td>
    </tr>
</table>
    </div>
</body>

</html>