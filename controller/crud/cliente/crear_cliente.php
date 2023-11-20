<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se creó</title>
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

        mysqli_query($conexion, "insert into cliente(clie_identificacion,clie_tipo_identificacion,clie_nombre_completo,clie_foto,clie_celular,clie_celular2,clie_direccion,clie_correo,usua_codigo_fk) values 
                                ('$_REQUEST[identificacion]','$_REQUEST[tipo]','$_REQUEST[nombre]','$_REQUEST[foto]','$_REQUEST[celular]','$_REQUEST[celular2]','$_REQUEST[direccion]','$_REQUEST[correo]','$_REQUEST[fk]')")
                                or die("Problemas en el select" . mysqli_error($conexion));
        
        mysqli_close($conexion);

         echo "cliente registrado";

    ?>
</body>
</html>