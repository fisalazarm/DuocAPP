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
                    <th>User_id</th>
                    <th>User name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Status</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['user_id']?></td>
                        <td><?php echo $usuario['username']?></td>
                        <td><?php echo $usuario['first_name']?></td>
                        <td><?php echo $usuario['last_name']?></td>
                        <td><?php echo $usuario['gender']?></td>
                        <td><?php echo $usuario['password']?></td>
                        <td><?php echo $usuario['status']?></td>
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