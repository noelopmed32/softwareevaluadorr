<?php
include 'conector.php';
$rfc = $_POST['rfc'];
    $consulta = "select * from test.evaluacion where rfc='$rfc'; ";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {
            $licenciatura = $array_registro['licenciatura'];
            $especialidad= $array_registro['especialidad'];
            $maestria= $array_registro['maestria'];
            $doctor= $array_registro['doctor'];
            $idioma= $array_registro['idioma'];
            $certificacion= $array_registro['certificacion'];
            $permanencia= $array_registro['permanencia'];
            $docentes= $array_registro['docentes'];
            $investigacion= $array_registro['investigacion'];
            $difucion= $array_registro['difucion'];
        
        }



        $datos[] =[
            $licenciatura,
            $especialidad,
            $maestria,
            $doctor,
            $idioma,
            $certificacion,
            $permanencia,
            $docentes,
            $investigacion,
            $difucionbb 
        ]; 


    echo json_encode($datos);

    $resultado->free(); 
    $conexion->close();
    
?>