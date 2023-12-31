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
    <link rel="shortcut icon" href="../favicon.ico"/>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

<!--Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title>GPS Tlaxcala (GPC)</title>
</head>
<body>
    
<br>

<table  style="margin: -23px;" width="102%" bgcolor="#37B6FF">
    <tr>
        <td><a href="../inicio.php"><img src="../logo.jpeg" alt=""  width="150" height="50"></a></td>
        <td><h3 >GPS - Tlaxcala</h3></td>
    </tr>
</table>
<hr>
<script type="text/javascript">
    //Función redirije al menú inicio
    function redirect_registro()
      {window.location.href="./crear.php";}
    </script>

<button name="redirect" onClick="redirect_registro()" class="button btn btn-primary mt-4">Registrar GPS</button>
<script type="text/javascript">
    //Función redirije al menú inicio
    function redirect()
      {window.location.href="../inicio.php";}
    </script>

<button name="redirect" onClick="redirect()"   class="button btn btn-primary mt-4">Ir a inicio</button>
<hr>
<table id="theTableCCTV" class="table table-striped table-bordered"  style="width: 100%">
    <thead>
        <tr>
          <th>Placa</th>
            <th>GPS</th>
            <th>Equipo</th>
            <th>SIM</th>
            <th>Línea</th>
            <th>Orden de servicio</th>
        </tr>
    </thead>
    <tfoot>
    </tfoot>
</table>
</body>
</html>

<?php include "templates/footer.php"; ?>