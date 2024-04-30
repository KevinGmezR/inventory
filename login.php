<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./css/login.css">
    <title>login-inventory</title>
</head>
<body>
    <h1>Inventory</h1>
    <img class="logo" src="./logo/LOGO_INVENTARIO.png" alt="">
    <div id="contenedor">
        <form action="" method="post">
            <h2>Iniciar Sesion</h2>
            <h5>Ingresa tu usuario</h5>
            <?php
            
                include "./modelo/conexion.php";
                include "./controlador/controlador_login.php"

            ?>
            <input class="inputs" type="text" name="user" id="user" placeholder="usuario">
            <div id="contraseñaLine">
                <input id="contraseña" class="inputs" type="password" name="password" placeholder="contraseña">
                <div>
                    <span id="viewPassword" class="material-symbols-outlined iconPassword">visibility</span>
                    <span id="hiddenPassword" class="material-symbols-outlined iconPassword">visibility_off</span>
                    <span id="textoFlotante" class="texto-flotante"></span>
                </div>

            </div>  
            <input id="iniciarS" type="submit" name="iniciarSesion" value="Iniciar Sesión">
        </form>
    </div>
    <img id="img3" src="./image/lista-de-verificacion.png" alt="">
    <script src="./js/login.js"></script>
</body>
</html>