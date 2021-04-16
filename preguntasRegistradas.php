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
                    <th>N° Pregunta</th>
                    <th>Pregunta</th>
                    <th>Tipo Pregunta</th>
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT pp.id_preguntas as id,pp.nombre_pregunta as pregunta,
                        tp.nombre_tipo_pregunta as tipo
                        FROM preguntas_predeterminadas pp
                        INNER JOIN tipo_pregunta tp ON pp.id_tipo_preguntafk = tp.id_tipo_pregunta";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?></td>
                        <td><?php echo $usuario['pregunta']?></td>
                        <td><?php echo $usuario['tipo']?></td>
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