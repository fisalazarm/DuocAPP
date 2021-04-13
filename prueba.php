<html>
    <?php $title = 'Prueba Asignatura'; ?>
    <?php $currentPage = 'agregarAsignatura'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
    
<style>
    *{
  margin: 0;
  padding: 0;
}

ul{
  list-style: none;
}
#menu li>a{
  background-color: grey;
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
    <nav class="col-12 bg-dark text-white py-3" >
        <ul id="menu">
          <li><a href="">Inicio</a></li>
          <li><a href="">Cursos</a>
            <ul>
              <li><a href="">Frontend</a></li>
              <li><a href="">Backend</a></li>
              <li><a href="">Mobile</a></li>
            </ul>  
          </li>
          <li><a href="">Tutoriales</a></li>
          <li><a href="">Contacto</a></li>
        </ul>
      </nav>
    </header>
    
  </body>
  <main class="row p-4">
        <form action="" class="row">
                <?php
                    session_start();
                    $usuario = $_SESSION['username'];
                    echo  "<h1>Bienvenido $usuario al menú de Docentes</h1>";
                ?>
        </form>
</main>

</html>