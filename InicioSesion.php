<html>
<?php $title = 'Login'; ?>
<?php $currentPage = 'InicioSesion'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<body>

    <form action="logueo.php" method="post">
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <form method="post">
                <br>
                <label for="inputUsuario">Ingrese su usuario</label>
                <br>
                <input type="text" name="usuario" placeholder="Ingrese su usuario" required>    
                <br>
                <label for="inputpassword">Ingrese su contraseña</label>
                <br>
                <input type="password" name="pass" placeholder="Ingrese su contraseña">
                <br>
                <button type="submit" id="Enviar"> Ingresar </button></a>
                <br>
                <a href="recuperacion/contrasenaOlvidada.php">¿Olvidaste tu Contraseña?</a>
                <br>
            </form>

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