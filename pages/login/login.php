<?php
require("../../header.php");
?>

<h3 id="subtitulo">Login</h3>
<div id="container_login" class="container">   
    <form class="login">
        <input id="email" type="email" placeholder="ejemplo@mail">
        <input id="contra" type="password" placeholder="contraseña">
        <input type="submit" onclick="loguearse()" value=" Iniciar sesión ">
    </form>
</div>

<script type="text/javascript" src="/pages/login/login.js"></script>

<?php
require("../../footer.php")
?>