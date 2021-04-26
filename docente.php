<html>
<?php $title = 'Menú Docente'; ?>
<?php $currentPage = 'docente'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>



   
    
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
            <li><a href="crearCuestionario.php">Crear Encuesta</a></li>
            <li><a href="resEncuestaPro.php ">Ver resultado de encuestas</a></li>
            <li><a href="reporteEncuesta.php ">Reporte</a></li>
            
        </ul>
      </nav>
    </header>
    

  <main class="row p-4">
        <form action="" class="row">
                <?php
                    session_start();
                    $usuario = $_SESSION['username'];
                    echo  "<h1>Bienvenido $usuario al menú de Encuestas</h1>";
                ?>
        </form>
</main>

</body>    
</html> 