<?php

$server="localhost";
$user="root";
$pass="";    
$db="duocapp";

$conexion = mysqli_connect($server,$user,$pass,$db);

if (!$conexion){
    echo "La conexión falló: ".mysqli_connect_error();
}else{
    echo "la conexión fue exitosa";
}

?>