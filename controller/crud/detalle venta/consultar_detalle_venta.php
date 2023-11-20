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

        $registros = mysqli_query($conexion, "select deve_codigo,deve_subtotal,deve_cantidad_por_producto,prod_codigo_fk,vent_codigo_fk
                        from detalle_venta where deve_subtotal ='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
    
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo del detalle de la venta:" . $reg['deve_codigo'] . "<br>";
            echo "Subtotal:" .$reg['deve_subtotal'] . "<br>";
            echo "Cantidad por porducto:" . $reg['deve_cantidad_por_producto'] . "<br>"; 
            echo "Codigo del producto:" .$reg['prod_codigo_fk'] . "<br>";
            echo "Codigo de la venta:" .$reg['vent_codigo_fk'] . "<br>";
        } else {
            echo "No existe ningun usuario con ese mail.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>