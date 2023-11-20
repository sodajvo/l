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

        mysqli_query($conexion, "insert into detalle_venta(deve_subtotal,deve_cantidad_por_producto,prod_codigo_fk,vent_codigo_fk) values 
                                ('$_REQUEST[subtotal]','$_REQUEST[cantidad]','$_REQUEST[prod]','$_REQUEST[vent]')")
                                or die("Problemas en el select" . mysqli_error($conexion));
        
        mysqli_close($conexion);

         echo "detalle de  la venta registrado";

    ?>
</body>
</html>