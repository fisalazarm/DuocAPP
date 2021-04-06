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
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Pregunta 1</th>
                    <th>Respuesta 1</th>                    
                    <th>Pregunta 2</th>
                    <th>Respuesta 2</th>
                    <th>Pregunta 2</th>
                    <th>Respuesta 3</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo, en.id_clasefk as asig,
                                    en.seccion as seccion, 
                                    en.pregunta1 as pre1, re.respuesta1 as re1, 
                                    en.pregunta2 as pre2, re.respuesta2 as re2,
                                    en.pregunta3 as pre3, re.respuesta3 as re3,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            INNER JOIN respuesta_encuesta re ON en.codigo_encuesta = re.id_encuestafk
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
                        <td><?php echo $usuario['re1']?></td>
                        <td><?php echo $usuario['pre3']?></td>
                        <td><?php echo $usuario['re1']?></td>
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