<?php
//conexion para bd



    $host = "localhost";
    $user ="root";
    $pass="";
    $db="multimedia_prueba_1";

    $conexion= mysqli_connect($host, $user,$pass,$db);
    return $conexion;


     




?>