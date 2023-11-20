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

        $registros = mysqli_query($conexion, "select clie_codigo,clie_identificacion,clie_tipo_identificacion,clie_nombre_completo,clie_foto,clie_celular,clie_celular2,clie_direccion,clie_correo,usua_codigo_fk
                        from cliente where clie_nombre_completo ='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
    
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo de cliente:" . $reg['clie_codigo'] . "<br>";
            echo "Identificación:" .$reg['clie_identificacion'] . "<br>";
            echo "Tipo de identificación:" .$reg['clie_tipo_identificacion'] . "<br>";
            echo "Nombre:" . $reg['clie_nombre_completo'] . "<br>"; 
            echo "Foto:" .$reg['clie_foto'] . "<br>";
            echo "Celular:" .$reg['clie_celular'] . "<br>";
            echo "Celular 2:" .$reg['clie_celular2'] . "<br>";
            echo "Direccion:" .$reg['clie_direccion'] . "<br>";
            echo "Correo:" .$reg['clie_correo'] . "<br>";
            echo "Direccion:" .$reg['clie_direccion'] . "<br>";
            echo "Codigo de usuario:" .$reg['usua_codigo_fk'] . "<br>";
        } else {
            echo "No existe ningun usuario con ese mail.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>