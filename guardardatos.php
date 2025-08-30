<?php
include 'conector.php';
$inputName = $_POST['inputName'];
$inputApellidoP = $_POST['inputApellidoP'];
$inputApellidoM = $_POST['inputApellidoM'];
$inputEscuela = $_POST['inputEscuela'];
$inputClaveP = $_POST['inputClaveP'];
$inputCategoria = $_POST['inputCategoria'];
$inputDescripcion = $_POST['inputDescripcion'];
$inputRFC = $_POST['inputRFC'];
$inputCorreo = $_POST['inputCorreo'];

    $consulta = "update test.datos_personales set NOMBRE ='$inputName', A_PATERNO ='$inputApellidoP', A_MATERNO ='$inputApellidoM', ESCUELA ='$inputEscuela', CLAVE_PRESUPUESTAL ='$inputClaveP', CCT ='$inputCategoria', CORREO ='$inputCorreo' where RFC ='$inputRFC';";
    if (!$resultado = $conexion->query($consulta)) {
        echo ('Noo');
        exit;
    }
   echo json_encode('bien');
    $resultado->free(); 
    $conexion->close();
    echo ('<div class="alert alert-success"><h5 class="alert-heading">Informacion actualizada</h5></div>');

    
?>