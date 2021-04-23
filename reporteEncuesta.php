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
                        $sql ="SELECT 'Respuesta 1 muy desacuerdos' as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD'
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
                        SELECT 'Respuesta 3 Descuerdos', COUNT(respuesta3)
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
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3)
                        FROM  respuesta_encuesta
                        WHERE id_encuestafk=811629 AND respuesta3=4
                        union ALL
                        SELECT 'Respuesta 3 muy Acuerdos', COUNT(respuesta3)
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