<?php
    if (!empty ($_POST ["btningresar"])) {
        if (empty ($_POST["usuario"]) and empty ($_POST ["password"])) {
            echo '<div style="color:#D62F0B ;background:#F9A08D ;border-radius: 20%;" "><strong><center> LOS CAMPOS ESTAN VACIOS</center></strong></div>';
        }else{
            $usuario=$_POST["usuario"];
            $clave=$_POST["password"];
            $sql=$conexion->query("select *from usuarios where usua_nombre='$usuario' and clave='$clave'");
            if ($datos=$sql->fetch_object()) {
                header("location:index_sin_login.html");
            } else {
                echo '<div style="color:#D62F0B ;background:#F9A08D ;border-radius: 20%;" "><strong><center>CREA UNA CUENTA O VERIFICA LOS DATOS</center></strong></div>';
            }
        }

    }
?>