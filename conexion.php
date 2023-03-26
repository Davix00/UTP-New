<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "utp";

    $conexion = mysqli_connect($host, $user, $pass, $db) or die("Error de conección");
    /*Comprobamos conexión
    if($conexion){
        echo "Exito";
    }*/
?>