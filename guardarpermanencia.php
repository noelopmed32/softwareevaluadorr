<?php
include 'conector.php';
$rfc = $_POST['rfc'];


$inputanio = $_POST['inputanio'];
$inputaniofile = $_POST['inputaniofile'];


    $consulta = "update test.permanencia set permanencia ='$inputanio', documento ='$inputaniofile' where RFC ='$rfc';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }


    $resultado->free(); 
    $conexion->close();
   
    
?>