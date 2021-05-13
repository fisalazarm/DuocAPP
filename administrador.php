<html>
<?php $title = 'Administrador'; ?>
<?php $currentPage = 'Administracion'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php session_start(); ?>

<body>
<style>
    *{
  margin: 0;
  padding: 0;
}

ul{
  list-style: none;
}
#menu li>a{
  background-color:  #00162b;
  color: white;
  padding: 10px;
  display: block;
  text-decoration: none;
  min-width: 100px;
}
#menu li>a:hover{
  color: #000;
  background-color: #eaeaea;
}
#menu>li{
  float: left;
  text-align:center
}
#menu>li>ul{
  display: none;
}
#menu>li:hover>ul {
  display:block;
}
</style>
 
    

  <body>
  <header class="row">
    <nav class="col-12 text-white py-3" >
        <ul id="menu">
        <li><a href="ResultadoEncuestaG.php ">Reporte</a></li>
            <li><a href="ingresoPlanDeEstudio.php">Plan Estudio</a></li>
            <li><a href="">Usuarios</a>
            <ul>
                <li><a href="Reporte.php ">Todos los usuario</a></li>
                <li><a href="signup-user.php">Registrar Usuario</a></li>
                <li><a href="IngresoUsuarios.php">Cargar Usuarios</a></li>
                <li><a href="eliminarUsuarios.php">Eliminar Usuarios</a></li>              
            </ul>  
        </li>          
        <li><a href="">Encuesta</a>
            <ul>
                <li><a href="creacionPreguntas.php">Ingresar Preguntas</a></li>
                <li><a href="eliminarPregunta.php">Eliminar Preguntas</a></li>
                <li><a href="preguntasRegistradas.php">Preguntas Registradas</a></li>
                <li><a href="agregarAsignatura.php"> Registrar Asignatura</a></li>
            </ul> 
          </li>
        <li><a href="tutorial.php">Tutorial</a></lia>          
        </ul>
      </nav>
    </header>


<?php
error_reporting(E_ALL ^ E_NOTICE);
    
    $usuario = $_SESSION['username'];
    echo  "<h1>Bienvenido $usuario al sistema de Administración</h1>";

?>
</html> 



<?php
/*<nav><ul>
        
        
    </ul></nav> */

?>