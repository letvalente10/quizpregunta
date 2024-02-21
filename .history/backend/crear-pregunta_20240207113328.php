<?php
if(isset($_POST)){
    require_once 'conexion.php';
    $pregunta = isset($_POST['pregunta'])? mysqli_real_escape_string($con, $_POST['pregunta'])
}