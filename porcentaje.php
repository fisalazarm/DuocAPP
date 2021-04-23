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
<input type="submit" value ="Aceptar">

        <br>
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Encuesta</th>
                    <th>Aprobación respuesta 1</th>
                    <th>Aprobación Respuesta 2</th>                    
                    <th>Aprobación Respuesta 3</th>
                </thead>
                <tbody>
                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);

                    $cod=$_POST["codigo_encuesta"];
                        $sql ="SELECT id_encuestafk,
                        SUM(CASE WHEN respuesta1 = 1 THEN 0
                                 WHEN respuesta1 = 2 THEN 25
                                 WHEN respuesta1 = 3 THEN 50
                                 WHEN respuesta1 = 4 THEN 75
                                 WHEN respuesta1 = 5 THEN 100 END)/ COUNT(respuesta1) as 'procentajes1',
                        SUM(CASE WHEN respuesta2 = 1 THEN 0
                                 WHEN respuesta2 = 2 THEN 25
                                 WHEN respuesta2 = 3 THEN 50
                                 WHEN respuesta2 = 4 THEN 75
                                 WHEN respuesta2 = 5 THEN 100 END) / COUNT(respuesta2) as 'procentajes2',
                        SUM(CASE WHEN respuesta3 = 1 THEN 0
                                 WHEN respuesta3 = 2 THEN 25
                                 WHEN respuesta3 = 3 THEN 50
                                 WHEN respuesta3 = 4 THEN 75
                                 WHEN respuesta3 = 5 THEN 100 END) / COUNT(respuesta3) as 'procentajes3'
                    FROM respuesta_encuesta
                    WHERE id_encuestafk = '$cod'";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['id_encuestafk']?></td>
                        <td><?php echo $usuario['procentajes1']?></td>
                        <td><?php echo $usuario['procentajes2']?></td>
                        <td><?php echo $usuario['procentajes3']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>

</form>
    


</body>

</html>