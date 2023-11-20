<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se actualizó</title>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost","root","","ventas_en_linea","3306") or 
        die ("problemas en la conexión");
        //if ($conexion) {
        //    echo "conexion establecida";
        //}else {
        //    echo "fallo en la conexion";
        //};

        $registros = mysqli_query($conexion, "select * from usuarios
                        where usua_correo='$_REQUEST[correo]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            ?>
                <form action="actualizar_usuario2.php" method="post">
                    Ingrese nuevo mail:
                    <input type="text" name="mailnuevo" value="<?php echo $reg['usua_correo'] ?>">
                    <br>
                    <input type="hidden" name="mailviejo" value="<?php echo $reg['usua_correo'] ?>">
                    <input type="submit" value="Modificar">
                </form>
            <?php
        } else{
            echo "No existe alumno con dicho mail";
        }
    ?>
</body>
</html>