<?php
include 'conector.php';
$rfc = $_POST['rfc'];

$inputlic = $_POST['inputlic'];
$inputliccombo = $_POST['inputliccombo'];
$inputlicfilevinc = $_POST['inputlicfilevinc'];

$inputesp = $_POST['inputesp'];
$inputespcombo = $_POST['inputespcombo'];
$inputespfilevinc = $_POST['inputespfilevinc'];

$inputmae = $_POST['inputmae'];
$inputmaecombo = $_POST['inputmaecombo'];
$inputmaefilevinc = $_POST['inputmaefilevinc'];

$inputdoc = $_POST['inputdoc'];
$inputdoccombo = $_POST['inputdoccombo'];
$inputdocfilevinc = $_POST['inputdocfilevinc'];


    $consulta = "update test.Datos_academia_a set lic ='$inputlic', g_lic ='$inputliccombo', vinc_lic ='$inputlicfilevinc', esp ='$inputesp', g_esp ='$inputespcombo', vinc_esp ='$inputespfilevinc', mae ='$inputmae', g_mae ='$inputmaecombo', vinc_mae ='$inputmaefilevinc', doc ='$inputdoc', g_doc ='$inputdoccombo', vinc_doc ='$inputdocfilevinc' where RFC ='$rfc';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }


    $resultado->free(); 
    $conexion->close();
    echo ('<div class="alert alert-success"><h5 class="alert-heading">Informacion actualizada</h5></div>');

    
?>