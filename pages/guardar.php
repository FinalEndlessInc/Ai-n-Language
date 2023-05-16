<?php

    include("abrir.php");

    $age                =$_POST['age'];
    $studies            =$_POST['studies'];
    $work               =$_POST['work'];
    $nativel            =$_POST['nativel'];
    $languages          =$_POST['languages'];
    $reason             =$_POST['reason'];
    $app                =$_POST['app'];
    $which              =$_POST['which'];
    $method             =$_POST['method'];
    $ai                 =$_POST['ai'];

    $Fecha= date("Y-m-d H:i:s");

    $consulta = "INSERT INTO lang(age, studies, work, nativel, languages, reason, app, which, method, ai,
    Fecha) VALUES
        ('$age','$studies','$work','$nativel','$languages','$reason','$app','$which','$method','$ai','$Fecha')";

        if ($conexion->query($consulta) === TRUE){
            header("Location: survey.php");
        }else{
            echo "Error: " . $consulta . "<br>" . $conexion->error;
        }
        $conexion->close();
        
?>