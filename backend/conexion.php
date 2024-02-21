<?php
$conexion = mysqli_connect("localhost","root","","quizz","3306");
if(mysql_connect_errno()){
    echo "error al conectar a la base de datos".mysql_connect_error();
}

else{
    echo "conexion exitosa";
}

mysqli_query($conexion,"SET NAMES 'utf8'");
?>