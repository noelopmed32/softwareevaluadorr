<?php
include 'conector.php';
$categoria = $_POST['categoria'];
    $consulta = "SELECT DESCRIPCION FROM test.categorias where categoria='$categoria' limit 1;";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {

                $descripcion = $array_registro['DESCRIPCION'];
        }

        $datos[] =[
            $descripcion
        ];

        
    echo json_encode($datos);

    $resultado->free(); 
    $conexion->close();
    
?>