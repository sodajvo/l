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

        mysqli_query($conexion, "insert into administrador(admi_identificacion,admi_tipo_identificacion,admi_nombre_completo,admi_foto,admi_celular,admi_direccion,usua_codigo_fk) values 
                                ('$_REQUEST[identificacion]','$_REQUEST[tipo]','$_REQUEST[nombre]','$_REQUEST[foto]','$_REQUEST[celular]','$_REQUEST[direccion]','$_REQUEST[fk]')")
                                or die("Problemas en el select" . mysqli_error($conexion));
        
        mysqli_close($conexion);

         echo "administrador registrado";

    ?>
</body>
</html>