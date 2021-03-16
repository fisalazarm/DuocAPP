<html>
<?php $title = 'Login'; ?>
<?php $currentPage = 'InicioSesion'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<body>

    <form action="logueo.php" method="post">
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <input type="text" name="usuario" placeholder="Ingrese su usuario">     
            <input type="password" name="pass" placeholder="Ingrese su contraseña">
            <button type="submit" id="Enviar"> Ingresar </button></a>
        </div> 
    </form> 
    
<?php
/*
error_reporting(E_ALL ^ E_NOTICE);

    
    
    session_start();
   
    $resultado=mysqli_query($con,$inicio);
    $filas=mysqli_num_rows($resultado);


if($filas){
  
    header("location:Reportes.php");

}


*/

?>

</body>
</html>