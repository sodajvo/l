<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se consultó</title>
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

        $registros = mysqli_query($conexion, "select usua_codigo,usua_nombre,usua_clave,usua_correo
                        from usuario where usua_correo='$_REQUEST[correo]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
    
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Código:" . $reg['usua_codigo'] . "<br>";
            echo "Nombre:" . $reg['usua_nombre'] . "<br>";
            echo "Contraseña:" .$reg['usua_clave'] . "<br>";
            echo "Correo:" .$reg['usua_correo'] . "<br>";
        } else {
            echo "No existe ningun usuario con ese mail.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>