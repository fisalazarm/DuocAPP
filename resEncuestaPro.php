<html>
<?php $title = 'Menú Docente'; ?>
<?php $currentPage = 'docente'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>

<?php include('conexion.php'); ?>

<body> 
<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>codigo</th>
                    <th>Estado</th>
                    <th>Tipo Usuario</th>
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT * FROM usertable";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?></td>
                        <td><?php echo $usuario['username']?></td>
                        <td><?php echo $usuario['email']?></td>
                        <td><?php echo $usuario['password']?></td>
                        <td><?php echo $usuario['code']?></td>
                        <td><?php echo $usuario['status']?></td>
                        <td><?php echo $usuario['tipo_usuario']?></td>
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