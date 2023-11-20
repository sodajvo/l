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

        $registros = mysqli_query($conexion, "select * from venta
                        where vent_fecha='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
            ?>
                <form action="actualizar_venta2.php" method="post">
                    Ingrese nuevo nombre:
                    <input type="date" name="mailnuevo" value="<?php echo $reg['vent_fecha'] ?>">
                    <br>
                    <input type="hidden" name="mailviejo" value="<?php echo $reg['vent_fecha'] ?>">
                    <input type="submit" value="Modificar">
                </form>
            <?php
        } else{
            echo "No existe venta con dicha fecha";
        }
    ?>
</body>
</html>