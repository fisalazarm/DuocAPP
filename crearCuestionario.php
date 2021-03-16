<html>
<?php $title = 'Profesor'; ?>
<?php $currentPage = 'crearCuestionario'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>

<body>
<?php
    session_start();
    $usuario = $_SESSION['username'];
    echo  "<h1>Bienvenido $usuario al menú profesores</h1>";

 
?>
</body>    
</html>