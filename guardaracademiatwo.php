<?php
include 'conector.php';
$rfc = $_POST['rfc'];


$inputidioma = $_POST['inputidioma'];
$inputidiomacombo = $_POST['inputidiomacombo'];
$inputidiomafilevinc = $_POST['inputidiomafile'];

$inputcer = $_POST['inputcer'];
$inputcercombo = $_POST['inputcercombo'];
$inputcerfilevinc = $_POST['inputcerfile'];


    $consulta = "update test.Datos_academia_b set idioma ='$inputidioma', g_idioma ='$inputidiomacombo', vinc_idioma ='$inputidiomafilevinc', certificado ='$inputcer', g_certificado ='$inputcercombo', vinc_certificado ='$inputcerfilevinc' where RFC ='$rfc';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }


   echo json_encode('bien');
    $resultado->free(); 
    $conexion->close();
    echo ('<div class="alert alert-success"><h5 class="alert-heading">Informacion actualizada</h5></div>');

    
?>