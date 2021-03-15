<html>
<?php $title = 'Administrador'; ?>
<?php $currentPage = 'Reportes'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>

<body>
<?php
    session_start();
    $usuario = $_SESSION['username'];
    echo  "<h1>Bienvenido $usuario al sistema de reportes</h1>";

 
?>
</body>    
</html>