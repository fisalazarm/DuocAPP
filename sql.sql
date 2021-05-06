SELECT 	en.codigo_encuesta as coen, ut.username,
		tiu.descripcion_usuario,CONCAT( en.dia_encuesta,' ', en.hora_encuesta) AS hf,
		en.pregunta1 as p1, re.respuesta1 as r1,
       	en.pregunta2 as p2, re.respuesta2 as r2,
       	en.pregunta3 as p3, re.respuesta3 as r3
FROM encuesta en
 	   	INNER JOIN respuesta_encuesta re on en.codigo_encuesta = re.id_encuestafk
       	INNER JOIN usertable ut on ut.id = en.id_profesorfk
        INNER JOIN tipo_usuario tiu ON tiu.id_tipo_usuario = ut.tipo_usuario
;

SELECT en.codigo_encuesta, en.id_clasefk,en.seccion, en.pregunta1,en.pregunta2,en.pregunta3 
FROM encuesta en
WHERE en.id_profesorfk = 'Javier'and en.dia_encuesta = CURDATE()


SELECT cl.nombre_clase, es.nombre_escuela
FROM clases cl
INNER JOIN escuela es ON cl.id_escuela = es.id_escuela

SELECT * 
from encuesta en
JOIN clases cl ON en.id_clasefk = cl.id_clase

SELECT CASE WHEN hora_encuesta < "18:00:00" THEN "Diurno"
			WHEN hora_encuesta > "18:00:00" THEN "Vespertino" END as Horario 
FROM `encuesta` 



SELECT codAsignatura,nombreAsignatura,escuela,
        CASE WHEN escuela = 'Diseño' THEN 1 END
FROM plandeestudio;

SELECT codAsignatura,nombreAsignatura,escuela,
        CASE WHEN escuela = 'Dise?o' THEN 1
             WHEN escuela = 'Inform?tica y Telecomunicaciones' THEN 2 
         	 WHEN escuela = 'Administraci?n y Negocios' THEN 3
             WHEN escuela = 'Extracurricular Deportes Ancla' THEN 4
             WHEN escuela = 'Extracurricular Selecciones Deporte' THEN 5
             WHEN escuela = 'Extracurricular Asuntos Estudiantiles' THEN 6
             WHEN escuela = 'Programa de Emprendimiento' THEN 7
             WHEN escuela = 'Programa de Etica' THEN 8
             WHEN escuela = 'Programa de Ingl?s' THEN 9
             WHEN escuela = 'Programa de Matem?ticas' THEN 10
             WHEN escuela = 'Comunicaci?n' THEN 11
             WHEN escuela = 'Programa de Formaci?n Cristiana' THEN 12
             WHEN escuela = 'Programa de Lenguaje y Comunicaci?n' THEN 13
             WHEN escuela = 'Construcci?n' THEN 14
             WHEN escuela = 'Escuela' THEN 15
             WHEN escuela = ' ' THEN 0
             END
FROM plandeestudio
INSERT INTO `asignatura`(`codigo_asignatura`, `nombre_asignatura`, `id_escuela`) 
SELECT DISTINCTROW codAsignatura,nombreAsignatura,
        CASE WHEN escuela = 'Diseño' THEN 1
             WHEN escuela = 'Inform?tica y Telecomunicaciones' THEN 2 
         	 WHEN escuela = 'Administración y Negocios' THEN 3
             WHEN escuela = 'Extracurricular Deportes Ancla' THEN 4
             WHEN escuela = 'Extracurricular Selecciones Deporte' THEN 5
             WHEN escuela = 'Extracurricular Asuntos Estudiantiles' THEN 6
             WHEN escuela = 'Programa de Emprendimiento' THEN 7
             WHEN escuela = 'Programa de Etica' THEN 8
             WHEN escuela = 'Programa de Inglés' THEN 9
             WHEN escuela = 'Programa de Matemáticas' THEN 10
             WHEN escuela = 'Comunicación' THEN 11
             WHEN escuela = 'Programa de Formación Cristiana' THEN 12
             WHEN escuela = 'Programa de Lenguaje y Comunicación' THEN 13
             WHEN escuela = 'Construcción' THEN 14
             WHEN escuela = 'Escuela' THEN 15
             WHEN escuela = ' ' THEN 0
             END
FROM plandeestudio


SELECT nombre_asignatura,
		SUBSTR(CONCAT(nombre_asignatura,' ',codigo_asignatura),-7,7),
		codigo_asignatura
FROM `asignatura` 


<?php  /*
                $asig= $con->query("SELECT codigo_asignatura FROM asignatura WHERE id_asignatura = '$asignatura'");            
                while ($a = $asig->fetch_assoc()) {
                    
                */
            ?>

/******/
 <div class="text-center">
            
            <div class="container">
       <div class="row">
       <div class="form-group col-12 col-lg-6">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo,
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            join asignatura asi on asi.id_asignatura = en.id_clasefk
                            WHERE en.id_profesorfk = '$usuario' and en.dia_encuesta = CURDATE()";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['codigo']?></td>
                        <td><?php echo $usuario['asig']?></td>
                        <td><?php echo $usuario['seccion']?></td>
                        <td><?php echo $usuario['pro']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
           </div>
       </div> 
    </div>
                                                                                                    
            </div>












 <div class="text-center">
            
            <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo,
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            join asignatura asi on asi.id_asignatura = en.id_clasefk
                            WHERE en.id_profesorfk = '$usuario' and en.dia_encuesta = CURDATE()";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['codigo']?></td>
                        <td><?php echo $usuario['asig']?></td>
                        <td><?php echo $usuario['seccion']?></td>
                        <td><?php echo $usuario['pro']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
           </div>
       </div> 
    </div>
                                                                                                    
            </div>

        </div>





        
            <div class="text-center">
            
            <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo,
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            join asignatura asi on asi.id_asignatura = en.id_clasefk
                            WHERE en.id_profesorfk = '$usuario' and en.dia_encuesta = CURDATE()";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['codigo']?></td>
                        <td><?php echo $usuario['asig']?></td>
                        <td><?php echo $usuario['seccion']?></td>
                        <td><?php echo $usuario['pro']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
           </div>
       </div> 
    </div>


    SELECT id_encuestafk
		CASE WHEN respuesta1 = 0 THEN "invalido"
        	 WHEN respuesta1 = 1 THEN 0
             WHEN respuesta1 = 2 THEN 25
             WHEN respuesta1 = 3 THEN 50
             WHEN respuesta1 = 4 THEN 75
             WHEN respuesta1 = 5 THEN 100 END as "procentajes respuesta 1",
             COUNT(respuesta1) as "Cantidad respuestas1"
FROM respuesta_encuesta


SELECT id_encuestafk,
		CASE WHEN respuesta1 = 0 THEN "invalido"
        	 WHEN respuesta1 = 1 THEN 0
             WHEN respuesta1 = 2 THEN 25
             WHEN respuesta1 = 3 THEN 50
             WHEN respuesta1 = 4 THEN 75
             WHEN respuesta1 = 5 THEN 100 END as "procentajes1",
        CASE WHEN respuesta2 = 0 THEN "invalido"
        	 WHEN respuesta2 = 1 THEN 0
             WHEN respuesta2 = 2 THEN 25
             WHEN respuesta2 = 3 THEN 50
             WHEN respuesta2 = 4 THEN 75
             WHEN respuesta2 = 5 THEN 100 END as "procentajes2",
        CASE WHEN respuesta3 = 0 THEN "invalido"
        	 WHEN respuesta3 = 1 THEN 0
             WHEN respuesta3 = 2 THEN 25
             WHEN respuesta3 = 3 THEN 50
             WHEN respuesta3 = 4 THEN 75
             WHEN respuesta3 = 5 THEN 100 END as "procentajes3"
FROM respuesta_encuesta



SELECT id_encuestafk,
		SUM(CASE WHEN respuesta1 = 0 THEN "invalido"
        	 WHEN respuesta1 = 1 THEN 0
             WHEN respuesta1 = 2 THEN 25
             WHEN respuesta1 = 3 THEN 50
             WHEN respuesta1 = 4 THEN 75
             WHEN respuesta1 = 5 THEN 100 END) as "procentajes1"
FROM respuesta_encuesta


SELECT id_encuestafk,
		SUM(CASE WHEN respuesta1 = 0 THEN "invalido"
        	 WHEN respuesta1 = 1 THEN 0
             WHEN respuesta1 = 2 THEN 25
             WHEN respuesta1 = 3 THEN 50
             WHEN respuesta1 = 4 THEN 75
             WHEN respuesta1 = 5 THEN 100 END)/ COUNT(respuesta1) as "procentajes1"
FROM respuesta_encuesta

/*respuestas porcentaje*/

SELECT id_encuestafk,
	COUNT(respuesta1),
	SUM(CASE WHEN respuesta1 = 1 THEN 0
             WHEN respuesta1 = 2 THEN 25
             WHEN respuesta1 = 3 THEN 50
             WHEN respuesta1 = 4 THEN 75
             WHEN respuesta1 = 5 THEN 100 END)/ COUNT(respuesta1) as "procentajes1",
    SUM(CASE WHEN respuesta2 = 1 THEN 0
             WHEN respuesta2 = 2 THEN 25
             WHEN respuesta2 = 3 THEN 50
             WHEN respuesta2 = 4 THEN 75
             WHEN respuesta2 = 5 THEN 100 END) / COUNT(respuesta2) as "procentajes2",
    SUM(CASE WHEN respuesta3 = 1 THEN 0
             WHEN respuesta3 = 2 THEN 25
             WHEN respuesta3 = 3 THEN 50
             WHEN respuesta3 = 4 THEN 75
             WHEN respuesta3 = 5 THEN 100 END) / COUNT(respuesta3) as "procentajes3"   
FROM respuesta_encuesta

/*contar respuestas*/

SELECT id_encuestafk,
	COUNT(respuesta1) as 'Total Respuestas',
    	 CASE WHEN respuesta1 = 1 THEN COUNT(respuesta1)end AS 'Muy desacuerdo',
         CASE WHEN respuesta1 = 2 THEN COUNT(respuesta1)end as 'Desacuerdo',
         CASE WHEN respuesta1 = 3 THEN COUNT(respuesta1)end as 'Neutro',
         CASE WHEN respuesta1 = 4 THEN COUNT(respuesta1)end as 'Acuerdo',
         CASE WHEN respuesta1 = 5 THEN COUNT(respuesta1)end as 'Muy Acuerdo' 
FROM respuesta_encuesta
WHERE id_encuestafk = 564342




/*reportes*/

funcionan

SELECT COUNT(id_encuestafk),
		CASE WHEN  respuesta1 = 5 THEN  respuesta1 end
from respuesta_encuesta
WHERE id_encuestafk = 564342


SELECT COUNT(id_encuestafk),
		CASE WHEN  respuesta2 = 4 THEN  respuesta2 end
from respuesta_encuesta
WHERE id_encuestafk = 564342

SELECT COUNT(id_encuestafk),
		CASE WHEN  respuesta3 = 5 THEN  respuesta3 end
from respuesta_encuesta
WHERE id_encuestafk = 564342

cantidad en reportes

SELECT 'Respuesta 1 muy desacuerdos' as 'Cantidad de respuestas', COUNT(respuesta1) as 'CANTIDAD'
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=1
union ALL
SELECT 'Respuesta 1 muy desacuerdos', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=2
union ALL
SELECT 'Respuesta 1 Neutro', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=3
union ALL
SELECT 'Respuesta 1 Acuerdos', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=4
union ALL
SELECT 'Respuesta 1 muy Acuerdos', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=5




/**/

SELECT 'Respuesta 1 muy desacuerdos' as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD'
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=1
union ALL
SELECT 'Respuesta 1 muy desacuerdos', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=2
union ALL
SELECT 'Respuesta 1 Neutro', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=3
union ALL
SELECT 'Respuesta 1 Acuerdos', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=4
union ALL
SELECT 'Respuesta 1 muy Acuerdos', COUNT(respuesta1)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta1=5/*respuesta1 fin*/
union ALL
SELECT 'Respuesta 2 Neutro', COUNT(respuesta2)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta2=1
union ALL
SELECT 'Respuesta 2 Acuerdos', COUNT(respuesta2)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta2=2
union ALL
SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta2=3
union ALL
SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta2=4
union ALL
SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta2=5/*respuesta1 fin*//*respuesta2 fin*/
union ALL
SELECT 'Respuesta 3 Acuerdos', COUNT(respuesta3)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta3=1
union ALL
SELECT 'Respuesta 3 Acuerdos', COUNT(respuesta3)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta3=2
union ALL
SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta3=3
union ALL
SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta3)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta3=4
union ALL
SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta3)
FROM  respuesta_encuesta
WHERE id_encuestafk=811629 AND respuesta3=5/*respuesta3 fin*/



/* GRÁFICO TORTA


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

 <?php
$result = $con->query("SELECT respuesta1 as re1, COUNT(respuesta1) as conre1 FROM respuesta_encuesta WHERE id_encuestafk='$cod'");

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
            echo "['".$row['re1']."', ".$row['conre1']."],";
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



   <?php
 
 $dataPoints = array();
 //Best practice is to create a separate file for handling connection to database
 try{
      // Creating a new connection.
     // Replace your-hostname, your-db, your-username, your-password according to your database
     $link = new \PDO(   'mysql:host=localhost;dbname=duocapp;charset=utf8', //'mysql:host=localhost;dbname=canvasjs_db;charset=utf8mb4',
                         'root', //'root',
                         '', //'',
                         array(
                             \PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                             \PDO::ATTR_PERSISTENT => false
                         )
                     );
     
     $handle = $link->prepare('select pregunta1, count(respuesta1) as re1 from encuesta en inner join respuesta_encuesta re on en.codigo_encuesta = re.id_encuestafk where codigo_encuesta = 123456'); 
     $handle->execute(); 
     $result = $handle->fetchAll(\PDO::FETCH_OBJ);
         
     foreach($result as $row){
         array_push($dataPoints, array("pregunta1"=> $row->x, "re1"=> $row->y));
     }
     $link = null;
 }
 catch(\PDOException $ex){
     print($ex->getMessage());
 }
     
 ?>
 <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
     animationEnabled: true,
     exportEnabled: true,
     theme: "light1", // "light1", "light2", "dark1", "dark2"
     title:{
         text: "PHP Column Chart from Database"
     },
     data: [{
         type: "pie", //change type to bar, line, area, pie, etc  
         dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
     }]
 });
 chart.render();
  
 }
 </script>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>