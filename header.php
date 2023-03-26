<?php
    require("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad Tecnológica de Puebla</title>
    <!--FAVICON-->
    <link rel="icon" type="image/x-icon" href="/images/icon.png">
    <!--CSS-->
    <link rel="stylesheet" href="/css/style.css">
    <!--CDN BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--GOOGLE FONTS-->
    <link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet" />
    <!--JQuery-->
    <script src="/js/jquery-3.6.4.min.js"></script>
</head>
<body>

    <!--Nav-->
    <nav class="navbar">
        <div class="container " style="margin-top: 0px;">
            <div class="info">
                <a href="/index.php" class="container_title">
                    <h3 id="titulo">
                        <img id="logo" class="img-fluid" src="/images/icon.png" alt="Logo">
                        UNIVERSIDAD TECNOLÓGICA DE PUEBLA
                    </h3>
                </a>
            </div>
            <div class="menu">
                <button class="opcion btn" onclick="irLogin()">Login</button>
                <button class="opcion btn" onclick="irRegistro()">Registrarse</button>
            </div>
            <form id="buscar" class="nav-item d-flex" role="search">
                <input class="form-control me-1" type="search" placeholder="estudiantes..." aria-label="Search">
                <button class="btn" style="background-color:#d6d6d6;" type="submit">Buscar</button>
            </form>
        </div>
    </nav>