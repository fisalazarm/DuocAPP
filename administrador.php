<html>
<?php $title = 'Administrador'; ?>
<?php $currentPage = 'Administracion'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<link rel="stylesheet" href="css/menu.css" type="text/css"  />

<body>

<nav><ul>
        <li><a href="creacionPreguntas.php">Ingresar Preguntas</a></li>
        <li><a href="ResultadoEncuestaG.php ">Sabana</a></li>
        <li><a href="Reporte.php ">Todos los usuario</a></li>
        <li><a href="signup-user.php">Registrar Usuario</a></li>
        <li><a href="agregarAsignatura.php">Agregar Asignatura</a></li>
    </ul></nav>

<?php
error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    $usuario = $_SESSION['username'];
    echo  "<h1>Bienvenido $usuario al sistema de Administración</h1>";

?>
   
</html> 