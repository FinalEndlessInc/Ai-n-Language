<?php

    $conexion = new mysqli("localhost", "root", "", "id19575223_language");
    if($conexion){
        /*echo "la gestion fue exitosa !!";*/
        header("Location: survey.php");
    }else{
        echo "Fallo la gestion";
    }

?>