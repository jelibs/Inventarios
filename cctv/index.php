<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <title>CCTV - Tlaxcala</title>
</head>
<body>
<?php include "templates/header.php"; ?>
<br>
<h3 align="center">CCTV - Tlaxcala</h3>

<a href="crear.php"  class="btn btn-primary mt-4">Registrar inventario CCTV</a>
      <a href="../inicio.php"  class="btn btn-primary mt-4">Ir a inicio</a>
      <hr>
<table id="theTableCCTV" class="table table-striped table-bordered"  style="width: 100%">
    <thead>
        <tr>
            <th>placa</th>
            <th>videograbador</th>
            <th>SD 1</th>
            <th>SD 2</th>
            <th>Cámara interior</th>
            <th>Cámara Exterior</th>
            <th>SIM</th>
            <th>Línea</th>
            <th>Orden</th>
        </tr>
    </thead>
    <tfoot>
    </tfoot>
</table>
</body>
</html>

<?php include "templates/footer.php"; ?>