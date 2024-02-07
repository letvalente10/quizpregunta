<?php
$con=mysqli_connect("localhost","root","","quizz");

if(mysqli_connect_errno()){
    echo"error al coenctar a la base de datos".mysqli_connect_error";

}
else{
    echo"conexion exitosa";
}   
mysqli_query($con,"SET NAMES'uetf8'");