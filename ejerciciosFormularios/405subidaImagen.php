<?php

if(!empty($_POST["anchura"]) && isset($_POST["anchura"])){
    $anchura = $_POST["anchura"];
}

if(!empty($_POST["altura"]) && isset($_POST["altura"])){
    $altura = $_POST["altura"];
}

$tipos_imagenes = ["image/png", "image/jpeg", "image/jpg"];

if (isset($_POST["btnSubir"]) && $_POST["btnSubir"] == "Subir"){

    if(is_uploaded_file($_FILES["archivoEnviado"]["tmp_name"])){

        if(in_array($_FILES["archivoEnviado"]["type"], $tipos_imagenes)){

            $archivo = $_FILES["archivoEnviado"]["name"];
            move_uploaded_file($_FILES["archivoEnviado"]["tmp_name"], "./uploads/{$archivo}");
            echo "<img src=\"./uploads/{$archivo}\" width=\"{$anchura}\" height=\"{$altura}\">";

        } else {
            echo "<p> Tipo de archivo no permitido, tiene que ser image/jpeg, inténtelo de nuevo </p>";
            echo "<a href=\"405subidaImagen.html\" /> Volver ";
        }
    }
}




?>