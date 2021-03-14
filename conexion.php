<?php
$server="localhost";
$user="root";
$pass="";    
$db="duocapp";

$con = mysqli_connect($server,$user,$pass,$db);

if (!$con){
    echo "La conexión falló: ".mysqli_connect_error();
}else{
    
}

?>