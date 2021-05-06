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
<head>
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/plotly-latest.min.js"></script>
    

</head>

<body>


<div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
        <br>


        <form action="reporteEncuesta.php" method="post" id="form" class="form-md">

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
                        $consulta="SELECT COUNT(id_encuestafk) AS cant,id_encuestafk AS COD
                                    FROM respuesta_encuesta 
                                    WHERE id_encuestafk='$cod'";
                         $consu = mysqli_query($con,$consulta);
                         while($cons=mysqli_fetch_array($consu))
                         {
                    ?>
                        <div class="form-group col-12 col-lg-6">

                    <label >Cantidad Respuestas de Alumnos</label>
                    <input type="text" name="cantidad" value="<?php echo $cons['cant']?>">
                    <input type="text" name="envio" value="<?php echo $cons['COD']?>">
                    </div>
                    <?php } ?>

<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Preguntas</th>
                    <th>Respuestas</th>
                    <th>Cantidad </th>
                    <th>Porcentaje %</th> 
                    <th>código Encuesta</th> 
                </thead>
                <tbody>
                    <?php
                    $cantidadRes=$_POST["cantidad"];
                                        error_reporting(E_ALL ^ E_NOTICE);

                        $sql ="SELECT pregunta1 as 'PREGUNTA', 'Respuesta 1 Muy Desacuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=1
                        UNION ALL
                        SELECT pregunta1 as 'PREGUNTA', 'Respuesta 1 Desacuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=2
                        UNION ALL
                        SELECT pregunta1 as 'PREGUNTA', 'Respuesta 1 Neutro'as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD' ,
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=3
                        UNION ALL
                        SELECT pregunta1 as 'PREGUNTA', 'Respuesta 1 Acuerdos'as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD' ,
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=4
                        UNION ALL
                        SELECT pregunta1 as 'PREGUNTA', 'Respuesta 1 Muy Acuerdos'as 'RESPUESTAS', COUNT(respuesta1) as 'CANTIDAD' ,
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta1=5
                        UNION ALL
                        SELECT pregunta2 as 'PREGUNTA', 'Respuesta 2 Muy Desacuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=1
                        UNION ALL
                        SELECT pregunta2 as 'PREGUNTA', 'Respuesta 2 Desacuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=2
                        UNION ALL
                        SELECT pregunta2 as 'PREGUNTA', 'Respuesta 2 Neutros' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=3
                        UNION ALL
                        SELECT pregunta2 as 'PREGUNTA', 'Respuesta 2 Acuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=4
                        UNION ALL
                        SELECT pregunta2 as 'PREGUNTA', 'Respuesta 2 Muy Acuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta2=5
                        UNION ALL
                        SELECT pregunta3 as 'PREGUNTA', 'Respuesta 2 Muy Desacuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=1
                        UNION ALL
                        SELECT pregunta3 as 'PREGUNTA', 'Respuesta 2 Desacuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=2
                        UNION ALL
                        SELECT pregunta3 as 'PREGUNTA', 'Respuesta 2 Neutros' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=3
                        UNION ALL
                        SELECT pregunta3 as 'PREGUNTA', 'Respuesta 2 Acuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=4
                        UNION ALL
                        SELECT pregunta3 as 'PREGUNTA', 'Respuesta 2 Muy Acuerdos' as 'RESPUESTAS',  COUNT(respuesta1) as 'CANTIDAD',
                        COUNT(respuesta1) *(100 / '$cantidadRes') as 'PORCENTAJE' ,id_encuestafk
                        FROM  respuesta_encuesta re
                        INNER JOIN encuesta en ON re.id_encuestafk = en.codigo_encuesta
                        WHERE id_encuestafk='$cod' AND respuesta3=5
                        
                        
                            ";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['PREGUNTA']?></td>
                        <td><?php echo $usuario['RESPUESTAS']?></td>
                        <td><?php echo $usuario['CANTIDAD']?></td>
                        <td><?php echo $usuario['PORCENTAJE']?></td>
                        <td><?php echo $usuario['id_encuestafk']?></td>                        
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
            
           </div>
       </div> 
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Gráficos
                        <button><a href="graficoBarra.php ">graficoBarra 1</a></button>
                        <button><a href="graficoBarra2.php ">graficoBarra 1</a></button>
                        <button><a href="graficoBarra3.php ">graficoBarra 1</a></button>
                    </div>
                    <div class="panel panel-body">
                        <div class="row">                            
                            <div class="col-sm-6-">
                                <div id="cargaBarras3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    </form>

   
</body>

</html> 


    <script type="text/javascript">
        $(document).ready(function(){
            $('#cargaBarras3').load('barra3.php');

        });
    </script>