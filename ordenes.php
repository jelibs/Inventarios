<?php
    header('Content-Type: text/html; charset=UTF-8');
    //Iniciar una nueva sesión o reanudar la existente.
    session_start();
    //Si existe la sesión "cliente"..., la guardamos en una variable.
    if (isset($_SESSION['loggedin'])){
        $cliente = $_SESSION['loggedin'];
    }else{
 header('Location: index.php');//Aqui lo redireccionas al lugar que quieras.
     die() ;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <title>Inicio</title>
</head>
<body>
<h1>Inventario</h1>
<table id="theTable" class="display" style="width: 100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>nombre</th>
            <th>correo</th>
            <th>password</th>

        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>correo</th>
            <th>password</th>
        </tr>
    </tfoot>
</table>
</body>
</html>
<script
  src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script type="application/javascript">
    $(document).ready( function () {
        $('#theTable').DataTable({
            ajax: './get_data.php',
        });
    } );
</script>