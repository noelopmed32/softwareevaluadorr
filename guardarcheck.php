<?php
include 'conector.php';
$rfc = $_POST['rfc'];


$checklic = $_POST['checklic'];
$checkesp = $_POST['checkesp'];
$checkmae = $_POST['checkmae'];
$checkdoc = $_POST['checkdoc'];
$checkidioma = $_POST['checkidioma'];
$checkcer = $_POST['checkcer'];
$checkanio = $_POST['checkanio'];
$checkdocentes=$_POST['checkdocentes'];
$checkinvestigacion=$_POST['checkinvestigacion'];
$checkdifucion=$_POST['checkdifucion'];


     $consulta = "update test.evaluacion set licenciatura ='$checklic', especialidad ='$checkesp', maestria = '$checkmae', doctor = '$checkdoc', idioma ='$checkidioma', certificacion ='$checkcer', permanencia ='$checkanio',docentes ='$checkdocentes',investigacion ='$checkinvestigacion',difucion ='$checkdifucion' where RFC ='$rfc';";
    if (!$resultado = $conexion->query($consulta)) {
        echo ('Noo');
        exit;
    }

    echo json_encode('bien');
    $resultado->free(); 
    $conexion->close();

?>