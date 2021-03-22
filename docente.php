<html>
<?php $title = 'Menú Docente'; ?>
<?php $currentPage = 'docente'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>

<body>
<link rel="stylesheet" href="css/menu.css" type="text/css"  />


<nav><ul>
        <li><a href="crearCuestionario.php">Crear Encuesta</a></li>
        <li><a href="respuestaEncuesta.php ">Ver resultado de encuestas</a></li>
    </ul></nav>


<?php
    session_start();
    $usuario = $_SESSION['username'];
    echo  "<h1>Bienvenido $usuario al menú de Docentes</h1>";


?>

</body>    
</html> 