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

        mysqli_query($conexion, "insert into venta(vent_fecha,vent_total,vent_cantidad,admi_codigo_fk,clie_codigo_fk) values 
                                ('$_REQUEST[fecha]','$_REQUEST[total]','$_REQUEST[cantidad]','$_REQUEST[admi]','$_REQUEST[clie]')")
                                or die("Problemas en el select" . mysqli_error($conexion));
        
        mysqli_close($conexion);

         echo "venta registrada";

    ?>
</body>
</html>