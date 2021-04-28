<html>
<?php $title = 'Reportes de Encuestas'; ?>
<?php $currentPage = 'Reportes'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
<?php
        error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        $usuario = $_SESSION['username'];
        $cod=$_POST["codigo_encuesta"];

?>
<body>
<div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
        <br>


        <form action="reporteEncuesta.php" method="POST" id="form" class="form-md">

    <div class="form-group col-12 col-lg-6">
                    <label>Encuesta:</label>
                    <select name="codigo_encuesta" required>
                        <option name="idPregunta" selected hidden value="" required>seleccione la Encuesta</option>
                            <?php
                                $result = $con->query("SELECT 	codigo_encuesta,
                                                        CONCAT(enc.id_profesorfk,' ', asi.nombre_asignatura,' ' ,enc.dia_encuesta) as 'clase'
                                                        from encuesta enc
                                                        INNER JOIN asignatura asi ON enc.id_clasefk = asi.id_asignatura 
                                                        where id_profesorfk ='$usuario'");
                                    while ($row = $result->fetch_assoc())
                                        { 
                                            echo "<option required value='".$row['codigo_encuesta']."'>".$row['clase']." </option>";           
                                        }                                    
                            ?>
                    </select>
                    <input type="submit" value="Aceptar">
                    
                    
 </div>
 

 <?php
                        $consulta="SELECT COUNT(id_encuestafk) AS cant 
                                    FROM respuesta_encuesta 
                                    WHERE id_encuestafk='$cod'";
                         $consu = mysqli_query($con,$consulta);
                         while($cons=mysqli_fetch_array($consu))
                         {
                    ?>
                        <div class="form-group col-12 col-lg-6">

                    <label >Cantidad Respuestas de Alumnos</label>
                    <input type="text" value="<?php echo $cons['cant']?>">
                    </div>
                    <?php } ?>

<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Respuestas</th>
                    <th>Cantidad </th>
                    <th>código Encuesta</th> 
                    <th>código Encuesta</th> 
                </thead>
                <tbody>
                    <?php
                                        error_reporting(E_ALL ^ E_NOTICE);

                        $sql ="SELECT 'Respuesta 1 muy desacuerdos' as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD',
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=1
                        union ALL
                        SELECT 'Respuesta 1  desacuerdos', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=2
                        union ALL
                        SELECT 'Respuesta 1 Neutro', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=3
                        union ALL
                        SELECT 'Respuesta 1 Acuerdos', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=4
                        union ALL
                        SELECT 'Respuesta 1 muy Acuerdos', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=5/*respuesta1 fin*/
                        union ALL
                        SELECT 'Respuesta 2 Neutro', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=1
                        union ALL
                        SELECT 'Respuesta 2 Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=2
                        union ALL
                        SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=3
                        union ALL
                        SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=4
                        union ALL
                        SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=5/*respuesta1 fin*//*respuesta2 fin*/
                        union ALL
                        SELECT 'Respuesta 3 Descuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=1
                        union ALL
                        SELECT 'Respuesta 3 Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=2
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=3
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=4
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk = '$cod' AND respuesta3=5/*respuesta3 fin*/
                            ";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['RESPUESTAS']?></td>
                        <td><?php echo $usuario['CANTIDAD']?></td>
                        <td><?php echo $usuario['id_encuestafk']?></td>                        
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
            
           </div>
       </div> 
    </div>


    <?php
$result = $con->query("SELECT * FROM respuesta_encuesta WHERE id_encuestafk='$cod'");

?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Respuesta1', 'Respuesta2'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['respuesta1']."', ".$row['respuesta2']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Resultados de Respuesta',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>






    </form>

   
</body>

</html> 