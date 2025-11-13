<?php

if(!empty($_POST["anchura"]) && isset($_POST["anchura"])){
    $anchura = $_POST["anchura"];
}

if(!empty($_POST["altura"]) && isset($_POST["altura"])){
    $altura = $_POST["altura"];
}

if (isset($_POST["btnSubir"]) && $_POST["btnSubir"] == "Subir"){
    if(is_uploaded_file($_FILES["archivoEnviado"]["tmp_name"])){
        $archivo = $_FILES["archivoEnviado"]["name"];
        move_uploaded_file($_FILES["archivoEnviado"]["tmp_name"], "./uploads/{$archivo}");

        echo "<img src=\"./uploads/{$archivo}\" width=\"{$anchura}\" height=\"{$altura}\">";
    }
}




?>