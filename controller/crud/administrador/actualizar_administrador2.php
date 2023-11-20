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

        mysqli_query($conexion, "update administrador
                        set admi_nombre_completo='$_REQUEST[mailnuevo]' 
                        where admi_nombre_completo='$_REQUEST[mailviejo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        echo "El nombre fue modificado con exito";
    ?>
</body>
</html>