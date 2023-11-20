<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","ventas_en_linea");

$consulta="SELECT*FROM usuario where usua_nombre='$usuario' and usua_clave='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_codigo_fk']==1){ //administrador
    header("location:index_sin_register.html");

}else
if($filas['rol_codigo_fk']==2){ //cliente
header("location:index_sin_login.html");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
