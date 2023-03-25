<?php
    require("../../conexion.php");

    $email = "david@mail.com";
    $contra = "1234";

    $query = "SELECT * FROM usuarios WHERE correo='.$email' AND contrasena ='.$contra.';";
    $res = mysqli_query($conexion, $query) or die("ERROR DE CONSULTA");
    $envia = "gola";

    while($usuario = mysqli_fetch_assoc($res)){
        switch($usuario['usuarios_tipo']){
            case 'admin': 
                $envia = "/pages/admin/admin.php";
                break;
            case 'usuario':
                $envia = "/pages/usuario/usuario.php";
                break;
            default:
                $envia = "/index.php";
                break;
        }
    }
        
    print_r($envia);

    mysqli_close($conexion);
?>