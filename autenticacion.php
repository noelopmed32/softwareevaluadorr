<?php
include 'conector.php';
$Username = $_POST['Username'];
$password = $_POST['password'];
    $consulta = "select count(*)as existe from test.usuarios where RFC ='$Username' and password='$password';";
    if (!$resultado = $conexion->query($consulta)) {
        echo json_encode('Noo');
        exit;
    }
        while ($array_registro = $resultado->fetch_assoc()) {
            $existe = $array_registro['existe'];
        }

        if($existe>=1){
            session_start();
            $_SESSION["usuario"] = $Username;
            header("Location: panel.php");
        } else {

            $error ='Error usuario o contraseña';
            header("Location: index.php?error=".$error);
        }



        

    $resultado->free(); 
    $conexion->close();
    
?>

