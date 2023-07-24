<?php
    //Función para conectar con la base de datos
    function conectar(){

      $host = "localhost";
      $user = "root";
      $pass = "";
      $bd = "proyectos";
      $con = mysqli_connect($host,$user,$pass);
      mysqli_select_db($con,$bd);
      return $con;
                      }

      //Guardamos la conexión en una variable 
      //para conectar a LA DB antes de hacer la Query
      $con = conectar();

      //Se reciben los parámetros por el método post
      $numero_orden = $_POST['numero_orden'];
      $nombre= $_POST['nombre'];
      $fecha= $_POST['fecha'];
      $sistema = $_POST['sistema'];
      $marca = $_POST['marca'];
      $modelo = $_POST['modelo'];
      $serie = $_POST['serie'];
      $defectos = $_POST['defectos'];
      $descripcion = $_POST['descripcion'];
      $observacion = $_POST['observacion'];
      $proyecto = $_POST['proyecto'];
      $estatus = $_POST['estatus'];


      $insertar = "INSERT INTO orden ('0', numero_orden, nombre, fecha, sistema, 
      marca, modelo, serie, defectos, descripcion, observacion, proyecto, estatus) VALUES(
          '0',
          '$numero_orden', 
          '$nombre', 
          '$fecha',
          '$sistema';
          '$marca',
          '$modelo',
          '$serie',
          '$defectos',
          '$descripcion',
          '$observacion',
          '$proyecto',
          '$estatus')";

      $query = mysqli_query($con, $insertar);


      if ($query) {
          header('location: ./index.php'); 
          exit();
          


          }
          else {
            echo "Error"
        }
?>