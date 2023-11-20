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
        $registros = mysqli_query($conexion, "select admi_codigo from administrador
                        where admi_nombre_completo='$_REQUEST[nombre]'") or
                     die("Problemas en el select:" . mysqli_error($conexion));
  
        if ($reg = mysqli_fetch_array($registros)) {
            mysqli_query($conexion, "delete from administrador where admi_nombre_completo='$_REQUEST[nombre]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
            echo "Se borró el administrador.";
        }else {
            echo "No existe admnistrador con ese nombre.";
        }
        
        mysqli_close($conexion);
    ?>
</body>
</html>