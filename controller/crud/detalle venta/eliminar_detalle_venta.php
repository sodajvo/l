<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se eliminó</title>
</head>
<body>
    <?php
        $conexion=mysqli_connect("localhost","root","","ventas_en_linea")or
        die("problemas de conexion");
        //if ($conexion) {
        //    echo "conexion establecida";
        //}else{
        //    echo "fallo en la conexion";
        //};
        $registros = mysqli_query($conexion, "select deve_subtotal from detalle_venta
                        where deve_codigo='$_REQUEST[nombre]'") or
                     die("Problemas en el select:" . mysqli_error($conexion));
  
        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "delete from detalle_venta where deve_codigo='$_REQUEST[nombre]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
            echo "Se borró el detalle de la venta.";
        }else {
            echo "No existe detalle de ventas con ese codigo.";
        }
        
        mysqli_close($conexion);
    ?>
</body>
</html>