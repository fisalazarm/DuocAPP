<?php
require 'conexion.php';
session_start();




$usuario = $_POST["usuario"];
$clave = $_POST["pass"];

$q = "SELECT count(*) as contar, tipo_usuario FROM usuario where nombre_Usuario = '$usuario' and contrasenna = '$clave'";
$consulta = mysqli_query($con,$q);
$array= mysqli_fetch_array($consulta);


/*
if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    header("location:Reportes.php");
}else{
    echo "Datos incorrectos";
}
*/

if($array['contar']>0 && $array['tipo_usuario']==1){
    $_SESSION['username'] = $usuario;
    header("location:Reportes.php");
} 
else if($array['contar']>0 && $array['tipo_usuario']==2){
    $_SESSION['username'] = $usuario;
    header("location:crearcuestionario.php");
}
else{

    //echo "<script> Alert('Datos Incorrectos'); header(location:InicioSesion.php) </script>";
     echo  "Datos incorrectos";
}

?>