<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesión</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/styles-login.css">
    </head>
    <body>
        <STYle>
            body{
    margin: 0%;
    padding: 0%;
    font-family: sans-serif;
}
video{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.capa{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #1c1c1d;
    opacity: 0.5;
    mix-blend-mode: overlay;
}
.login-box{
    width: 320px;
    height: 500px;
    background: black;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px ;
    opacity: 75%;
}
h1{
    margin: 0;
    padding: 0 0 10px;
    text-align: center;
    font-size: 30px;
}
label{
    margin: 0;
    padding: 0;
    font-weight: bold;
    display: block;
    font-size: 20px;
}
input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"],
.login-box input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 20px;
}
.login-box input[type="email"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 20px;
}
.login-box input[type="submit"] {
    border: none;
    border-radius: 20px;
    background: #b80f22;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 20px;
}
a{
    text-decoration: none;
    font: 12px;
    line-height: 20px;
    color: darkgrey;
    font-size: 20px;
}
a:hover{
    color: #fff;
}
        </STYle>
        <video muted autoplay loop>
            <source src="videos/menu_peliculas.mp4" type="video/mp4" >
        </video>
        <div class="capa"></div>
        <div class="login-box">
            <h1>Crea tu cuenta</h1>
            <?php
                include("conexion_bd.php");
                include("controlador2.php");
            ?>
            <form method="post" action="">
                <!--Nombre de Usuario-->
                <label>Nombre</label>
                <input type="text" required placeholder="John Alezander Doe" name="usuario">
                <!--Fin del Nombre de usuario-->

                <!--Contraseña del usuario-->
                <label>Contraseña</label>
                <input type="password" required placeholder="FUCK YOU" name="clave">
                <!--Fin de la contraseña del usuarios-->

                <!--Contraseña del usuario-->
                <label>Código del establecimiento</label>
                <input type="text" required placeholder="1" name="correo">
                <!--Fin de la contraseña del usuarios-->

                <!--Boton de "Iniciar sesión"-->
                <input type="submit" value="Crear cuenta" name="registro">
                <!--Final del botón de "Iniciar sesión"-->

                <!--Frase de  "No tienes una cuenta"-->
                <a href="login.php">¿ya tienes una cuenta?</a>
                <!--Fin de la frase de "No tienes una cuenta"-->
                <br>
                

            </form>
            
        </div>
    </body>
</html>