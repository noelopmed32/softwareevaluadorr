<?php
include 'conector.php';
$rfc = $_POST['rfc'];
    $consulta = "Select a.* from test.Datos_academia_b a where RFC='$rfc' limit 1;";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {

                $idioma = $array_registro['idioma'];
                $g_idioma = $array_registro['g_idioma'];
                $vinc_idioma = $array_registro['vinc_idioma'];
                $certificado = $array_registro['certificado'];
                $g_certificado = $array_registro['g_certificado'];
                $vinc_certificado = $array_registro['vinc_certificado'];
        }



        $datos[] =[
                $idioma,
                $g_idioma,
                $vinc_idioma,
                $certificado,
                $g_certificado,
                $vinc_certificado
        ]; 


    echo json_encode($datos);

    $resultado->free(); 
    $conexion->close();
    
?>