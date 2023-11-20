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

        $registros = mysqli_query($conexion, "select vent_codigo,vent_fecha,vent_total,vent_cantidad,admi_codigo_fk,clie_codigo_fk
                        from venta where vent_fecha ='$_REQUEST[nombre]'") or
                        die("Problemas en el select:" . mysqli_error($conexion));
    
        if ($reg = mysqli_fetch_array($registros)) {
            echo "Codigo de la venta:" . $reg['vent_codigo'] . "<br>";
            echo "Fecha:" .$reg['vent_fecha'] . "<br>";
            echo "Total:" . $reg['vent_total'] . "<br>"; 
            echo "Cantidad:" .$reg['vent_cantidad'] . "<br>";
            echo "Codigo de admnistrador:" .$reg['admi_codigo_fk'] . "<br>";
            echo "Codigo de cliente:" .$reg['clie_codigo_fk'] . "<br>";
        } else {
            echo "No existe ningun usuario con ese mail.";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>