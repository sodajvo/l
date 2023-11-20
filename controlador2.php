<?php
    //$conexion=mysqli_connect("localhost","root","","negocio") or 
    //die ("problemas en la conexión");

    //if ($conexion) {
    //    echo "conexion establecida";
    //}else {
    //    echo "fallo en la conexion";
    //};

    //$registro=mysqli_query($conexion, "insert into usuario(usua_nombre,usua_clave,usua_correo) values 
    //                        ('$_REQUEST[nombre]','$_REQUEST[contrasena]','$_REQUEST[correo]')")
    //                        or die("Problemas en el select" . mysqli_error($conexion));
    
    //mysqli_close($conexion);
    
    //if ($registro) {
    //    echo "Bienvenido ";
    //}else {
    //    echo "Fallo en la creación de la cuenta";
    //};

    if (!empty($_POST["registro"])) {
        if (empty($_POST["usuario"]) or empty($_POST["clave"])) {
            echo "Uno de los campos esta vacio.";
        } else {
            include("conexion_bd.php");
            $nombre=$_REQUEST["usuario"];
            $clave=$_REQUEST["clave"];
            $sql=$conexion->query("insert into usuario(usua_nombre,clave)values('$nombre','$clave')");
            if ($sql==1) {
                header("location:index.html");
            } else {
                echo '<div style="color:#D62F0B ;background:#F9A08D ;border-radius: 20%;" "><strong><center>ERROR AL CREAR LA CUENTA</center></strong></div>';
            }
            
        }
        
    }
?>