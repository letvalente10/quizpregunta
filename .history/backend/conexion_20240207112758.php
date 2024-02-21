<?php
$con=mysqli_connect("localhost","root","")
if(mysql_connect_errno()){
    echo "error al conectar a la base de datos".mysql_connect_error();
}