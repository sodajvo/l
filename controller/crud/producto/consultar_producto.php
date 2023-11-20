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

        $registros = mysqli_query($conexion, "select prod_nombre,prod_precio_venta,prod_unidad_medida,prod_stock,prod_descripcion
                        from producto where prod_nombre='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
    
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre:" . $reg['prod_nombre'] . "<br>";
            echo "Precio:" .$reg['prod_precio_venta'] . "<br>";
            echo "Correo:" .$reg['prod_unidad_medida'] . "<br>";
            echo "Stock:" .$reg['prod_stock'] . "<br>";
            echo "Descripción:" .$reg['prod_descripcion'] . "<br>";
        } else {
            echo "No existe ningun usuario con ese mail.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>