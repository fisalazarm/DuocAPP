<html>
<?php $title = 'Reportes'; ?>
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
                    <th>id</th>
                    <th>Usuario </th>
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