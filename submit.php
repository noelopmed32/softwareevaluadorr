<?php
$name = $_POST['name'];
$nombre = $_POST['nombre'];
if(!empty($_POST['name']) || !empty($_FILES['file']['name'])){
    $uploadedFile = '';
    if(!empty($_FILES["file"]["type"])){
        $fileName = $nombre.'_'.$_FILES['file']['name'];
        $valid_extensions = array("pdf");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
        if((($_FILES["hard_file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/pdf") || ($_FILES["file"]["type"] == "application/pdf")) && in_array($file_extension, $valid_extensions)){
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $fileName;
            }
        }
    }
    
}

echo 'end';

