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

        $registros = mysqli_query($conexion, "select admi_codigo,admi_identificacion,admi_tipo_identificacion,admi_nombre_completo,admi_foto,admi_celular,admi_direccion,usua_codigo_fk
                        from administrador where admi_nombre_completo ='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
    
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo de admnistrador:" . $reg['admi_codigo'] . "<br>";
            echo "Identificación:" .$reg['admi_identificacion'] . "<br>";
            echo "Tipo de identificación:" .$reg['admi_tipo_identificacion'] . "<br>";
            echo "Nombre:" . $reg['admi_nombre_completo'] . "<br>"; 
            echo "Foto:" .$reg['admi_foto'] . "<br>";
            echo "Celular:" .$reg['admi_celular'] . "<br>";
            echo "Direccion:" .$reg['admi_direccion'] . "<br>";
            echo "Codigo de usuario:" .$reg['usua_codigo_fk'] . "<br>";
        } else {
            echo "No existe ningun usuario con ese mail.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>