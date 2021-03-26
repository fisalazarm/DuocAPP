<html>
<?php $title = 'Reportes'; ?>
<?php $currentPage = 'Reportes'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>


<body> 
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Encuesta</th>
                    <th>Responsable</th>
                    <th>Cargo</th>
                    <th>Fecha y Hora</th>
                    <th>Pregunta 1 </th>
                    <th>Respuesta 1</th>
                    <th>Pregunta 2</th>
                    <th>Respuesta 2</th>
                    <th>Pregunta 3</th>
                    <th>Respuesta 3</th>
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT 	en.codigo_encuesta as coen, ut.username as un,
                        tiu.descripcion_usuario as us,CONCAT( en.dia_encuesta,' ', en.hora_encuesta) AS hf,
                        en.pregunta1 as p1, re.respuesta1 as r1,
                           en.pregunta2 as p2, re.respuesta2 as r2,
                           en.pregunta3 as p3, re.respuesta3 as r3
                FROM encuesta en
                            INNER JOIN respuesta_encuesta re on en.codigo_encuesta = re.id_encuestafk
                           INNER JOIN usertable ut on ut.id = en.id_profesorfk
                        INNER JOIN tipo_usuario tiu ON tiu.id_tipo_usuario = ut.tipo_usuario";
                        $result = mysqli_query($con,$sql);
                        while($sabana=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $sabana['coen']?></td>
                        <td><?php echo $sabana['un']?></td>
                        <td><?php echo $sabana['us']?></td>
                        <td><?php echo $sabana['hf']?></td>
                        <td><?php echo $sabana['p1']?></td>
                        <td><?php echo $sabana['r1']?></td>
                        <td><?php echo $sabana['p2']?></td>
                        <td><?php echo $sabana['r2']?></td>
                        <td><?php echo $sabana['p2']?></td>
                        <td><?php echo $sabana['r3']?></td>
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