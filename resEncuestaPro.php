<html>
<?php $title = 'Menú Docente'; ?>
<?php $currentPage = 'docente'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
<?php
        error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        $usuario = $_SESSION['username'];
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>

<body>
<div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
        <br>
     
        <br>
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Pregunta 1</th>
                    <th>Respuesta 1</th>                    
                    <th>Pregunta 2</th>
                    <th>Respuesta 2</th>
                    <th>Pregunta 2</th>
                    <th>Respuesta 3</th>
                    <th>Comentario</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo, 
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion, 
                                    en.pregunta1 as pre1, 
                                       CASE WHEN re.respuesta1 = 1 THEN 'Muy Desacuerdo' 
                                            WHEN re.respuesta1 = 2 THEN 'En Desacuerdo' 
                                            WHEN re.respuesta1 = 3 THEN 'Neutro' 
                                            WHEN re.respuesta1 = 4 THEN 'De Acuerdo'  
                                            WHEN re.respuesta1 = 5 THEN 'Muy Acuerdo' 
                                            WHEN re.respuesta1 = 0 THEN 'Sin Responder'  end as re1, 
                                    en.pregunta2 as pre2, 
                                       CASE WHEN re.respuesta2 = 1 THEN 'Muy Desacuerdo' 
                                            WHEN re.respuesta2 = 2 THEN 'En Desacuerdo' 
                                            WHEN re.respuesta2 = 3 THEN 'Neutro' 
                                            WHEN re.respuesta2 = 4 THEN 'De Acuerdo'  
                                            WHEN re.respuesta2 = 5 THEN 'Muy Acuerdo' 
                                            WHEN re.respuesta1 = 0 THEN 'Sin Responder'   end as re2,
                                    en.pregunta3 as pre3, 
                                       CASE WHEN re.respuesta3 = 1 THEN 'Muy Desacuerdo' 
                                            WHEN re.respuesta3 = 2 THEN 'En Desacuerdo' 
                                            WHEN re.respuesta3 = 3 THEN 'Neutro' 
                                            WHEN re.respuesta3 = 4 THEN 'De Acuerdo'  
                                            WHEN re.respuesta3 = 5 THEN 'Muy Acuerdo' 
                                            WHEN re.respuesta1 = 0 THEN 'Sin Responder'   end as re3,
                                    re.comentario as com,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            INNER JOIN respuesta_encuesta re ON en.codigo_encuesta = re.id_encuestafk
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
                        <td><?php echo $usuario['pre1']?></td>
                        <td><?php echo $usuario['re1']?></td>
                        <td><?php echo $usuario['pre2']?></td>
                        <td><?php echo $usuario['re2']?></td>
                        <td><?php echo $usuario['pre3']?></td>
                        <td><?php echo $usuario['re3']?></td>
                        <td><?php echo $usuario['com']?></td>
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
   
    


</body>

</html>