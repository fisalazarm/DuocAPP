<html>
<?php $title = 'Reportes de Usuarios Regitrados'; ?>
<?php $currentPage = 'Reportes'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<body>
<div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
        <br>


        <form action="porcentaje.php" method="POST" id="form" class="form-md">

    <div class="form-group col-12 col-lg-6">
                    <label>Encuesta:</label>
                    <select name="codigo_encuesta" required>
                        <option name="idPregunta" selected hidden value="" required>seleccione la Encuesta</option>
                            <?php
                                $result = $con->query("SELECT 	codigo_encuesta,
                                                        CONCAT(enc.id_profesorfk,' ', asi.nombre_asignatura,' ' ,enc.dia_encuesta) as 'clase'
                                                        from encuesta enc
                                                        INNER JOIN asignatura asi ON enc.id_clasefk = asi.id_asignatura");
                                    while ($row = $result->fetch_assoc())
                                        { 
                                            echo "<option required value='".$row['codigo_encuesta']."'>".$row['clase']." </option>";           
                                        }                                    
                            ?>
                    </select>
                    
 </div>
 </form>
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Respuestas</th>
                    <th>Cantidad </th>
                    <th>opcional</th>                  
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT 'Respuesta 1 muy desacuerdos' as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD',
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta1=1
                        union ALL
                        SELECT 'Respuesta 1 muy desacuerdos', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta1=2
                        union ALL
                        SELECT 'Respuesta 1 Neutro', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta1=3
                        union ALL
                        SELECT 'Respuesta 1 Acuerdos', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta1=4
                        union ALL
                        SELECT 'Respuesta 1 muy Acuerdos', COUNT(respuesta1),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta1=5/*respuesta1 fin*/
                        union ALL
                        SELECT 'Respuesta 2 Neutro', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta2=1
                        union ALL
                        SELECT 'Respuesta 2 Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta2=2
                        union ALL
                        SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta2=3
                        union ALL
                        SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta2=4
                        union ALL
                        SELECT 'Respuesta 2 muy Acuerdos', COUNT(respuesta2),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta2=5/*respuesta1 fin*//*respuesta2 fin*/
                        union ALL
                        SELECT 'Respuesta 3 Descuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta3=1
                        union ALL
                        SELECT 'Respuesta 3 Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta3=2
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta3=3
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta3=4
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3),
                        id_encuestafk
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta3=5/*respuesta3 fin*/
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
   
   
</body>

</html> 