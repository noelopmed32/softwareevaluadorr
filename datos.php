<?php
include 'conector.php';
$rfc = $_POST['rfc'];
    $consulta = "Select a.*,(select descripcion from test.categorias b where a.CCT = b.categoria limit 1)descripcion from test.Datos_personales a where RFC='$rfc' limit 1;";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {

                $NOMBRE = $array_registro['NOMBRE'];
                $A_PATERNO = $array_registro['A_PATERNO'];
                $A_MATERNO = $array_registro['A_MATERNO'];
                $ESCUELA = $array_registro['ESCUELA'];
                $CLAVE_PRESUPUESTAL = $array_registro['CLAVE_PRESUPUESTAL'];
                $CCT = $array_registro['CCT'];
                $RFC = $array_registro['RFC'];
                $CORREO = $array_registro['CORREO'];
                $descripcion = $array_registro['descripcion'];
        }



        $datos[] =[
            $NOMBRE,
            $A_PATERNO,
            $A_MATERNO,
            $ESCUELA,
            $CLAVE_PRESUPUESTAL,
            $CCT,
            $RFC,
            $CORREO,
            $descripcion
        ]; 


    echo json_encode($datos);

    $resultado->free(); 
    $conexion->close();
    
?>