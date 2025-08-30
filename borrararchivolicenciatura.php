<?php

$filename = glob ('subirevidencia/uploadlicenciatura/*');

foreach($filename as $archivo){
    if(is_file($archivo))   // Comprobamos que sean ficheros normales, y de ser asi los eliminamos en la siguiente linea
    unlink($archivo);       //Eliminamos el archivo
}
echo 'Se ha eliminado el archivo que se subio';
?>