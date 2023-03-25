<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "utp";

    $conexion = mysqli_connect($host, $user, $pass, $db) or die("Error de conección");

    if (!$conexion) {
        echo "Error" . PHP_EOL. "\n";
        echo "Errno de depuración: " . mysqli_connect_errno() . PHP_EOL. "\n";
    }
?>