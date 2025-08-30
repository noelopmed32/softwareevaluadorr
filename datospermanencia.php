<?php
include 'conector.php';
$rfc = $_POST['rfc'];
    $consulta = "Select a.* from test.permanencia a where RFC='$rfc' limit 1;";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {

                $permanencia = $array_registro['permanencia'];
                $documento = $array_registro['documento'];

        }



        $datos[] =[
                $permanencia,
                $documento
        ]; 


    echo json_encode($datos);

    $resultado->free(); 
    $conexion->close();
    
?>