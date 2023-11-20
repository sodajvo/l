<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se actualizó</title>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost","root","","ventas_en_linea") or 
        die ("problemas en la conexión");
        //if ($conexion) {
        //    echo "conexion establecida";
        //}else {
        //    echo "fallo en la conexion";
        //};

        $registros = mysqli_query($conexion, "select * from administrador
                        where admi_nombre_completo='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            ?>
                <form action="actualizar_administrador2.php" method="post">
                    Ingrese nuevo nombre:
                    <input type="text" name="mailnuevo" value="<?php echo $reg['admi_nombre_completo'] ?>">
                    <br>
                    <input type="hidden" name="mailviejo" value="<?php echo $reg['admi_nombre_completo'] ?>">
                    <input type="submit" value="Modificar">
                </form>
            <?php
        } else{
            echo "No existe administrador con dicho mail";
        }
    ?>
</body>
</html>