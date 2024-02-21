<?php
if(isset($_POST)){
    require_once 'conexion.php';
    $pregunta = isset($_POST['pregunta'])? mysqli_real_escape_string($con, $_POST['pregunta'])
    : false;

    $error=array();

    if(empty($pregunta)){
        $error['pregunta'] = "La pregunta no puede estar vacia";
    }
    if(empty($imagen))
}