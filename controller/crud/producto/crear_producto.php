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

        mysqli_query($conexion, "insert into producto(prod_nombre,prod_precio_venta,prod_unidad_medida,prod_stock,prod_descripcion) values 
                                ('$_REQUEST[nombre]','$_REQUEST[precio]','$_REQUEST[medida]','$_REQUEST[stock]','$_REQUEST[descripcion]')")
                                or die("Problemas en el select" . mysqli_error($conexion));
        
        mysqli_close($conexion);

         echo "producto registrado";

    ?>
</body>
</html>