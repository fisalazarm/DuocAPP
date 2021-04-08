<html>
    <?php $title = 'Crear Cuestionario'; ?>
    <?php $currentPage = 'crearCuestionario'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
    <?php
//error_reporting(E_ALL ^ E_NOTICE);

?>
    <?php
        $sql_query = "SELECT id_encuesta,codigo_encuesta,id_clasefk,seccion,
                        pregunta1,pregunta2,pregunta3,dia_encuesta, hora_encuesta, id_profesorfk
                        FROM encuesta";
        $resultset = mysqli_query($con, $sql_query) or die("database error:". mysqli_error($con));
        $developer_records = array();
        while( $rows = mysqli_fetch_assoc($resultset) ) {
        $developer_records[] = $rows;
        }
    ?>
    <body>
        <div class="container">
    <h2>Export Data to Excel with PHP and MySQL</h2>
    <div class="well-sm col-sm-12">
    <div class="btn-group pull-right">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <a href="exportarDatos.php">Descargar</a>
    </form>
    </div>
    </div>
    <table id="" class="table table-striped table-bordered">
    <tr>
    <th>ID</th>
    <th>Encuesta</th>
    <th>Clase</th>
    <th>Sección</th>
    <th>Pregunta</th>
    <th>Pregunta</th>
    <th>Pregunta</th>
    <th>Dia</th>
    <th>Hora</th>
    <th>Profe</th>
    </tr>
    <tbody>
    <?php foreach($developer_records as $developer) { ?>
    <tr>
                  
    <td><?php echo $developer ['id_encuesta']; ?></td>
    <td><?php echo $developer ['codigo_encuesta']; ?></td>
    <td><?php echo $developer ['id_clasefk']; ?></td>
    <td><?php echo $developer ['seccion']; ?></td>
    <td><?php echo $developer ['pregunta1']; ?></td>
    <td><?php echo $developer ['pregunta2']; ?></td>
    <td><?php echo $developer ['pregunta3']; ?></td>
    <td><?php echo $developer ['dia_encuesta']; ?></td>
    <td><?php echo $developer ['hora_encuesta']; ?></td>
    <td><?php echo $developer ['id_profesorfk']; ?></td>

    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>


    </body>
</html>