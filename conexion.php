<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'proyectos');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
        echo "Conexión a base de datos exitosa";
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>