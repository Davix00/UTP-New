<?php
    require("../header.php")
?>

<h3 id="subtitulo">Registrate</h3>
<div id="container_login" class="container">   
    <form class="login">
        <input id="nombre" type="email" placeholder="ejemplo@mail">
        <input id="contra" type="password" placeholder="contraseña">
        <input type="submit" onclick="Login()" value=" Registrate ">
    </form>
</div>

<?php
    require("../footer.php")
?>
