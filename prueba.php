<html>
    <?php $title = 'Prueba Asignatura'; ?>
    <?php $currentPage = 'Prueba'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
  

<body>


    <form action="eliminar.php" method="post">
        <input type="text" name="nuevo">
        <input type="text" name="" placeholder="viejo">

        <td>Usuario:</td>
                    <select name="viejo" class="form-select form-select-lg mb-1" id="SelectPregunta" required>
                        <option selected hidden value="" required>Indique la asignatura</option>
                            <?php
                                $result = $con->query("select * FROM usertable");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['nombres']."'>".$row['nombres']." </option>";
                                    }
                                
                                    
                            ?>
                            <div>
                            <input type="text"value="">
                            </div>
                    </select>
                </td>

            <input type="submit" value="Actualizar">
            
    </form>


<!--
<div class="center">
    <td>Usuarios:</td>
        <select name="id_usuario" required>
        <option name="idPregunta" selected hidden value="" required>Indique al Usuario</option>
  <?php
  /*
    $result = $con->query("select * FROM usertable");
      while ($row = $result->fetch_assoc())
        { 
          echo "<option required value='".$row['id']."'>".$row['username']." </option>";           
        }                                    
  ?>
        </select>
    </td>
</div>
<button type="submit"  id="Enviar">Eliminar</button>     
<a class="btn btn-primary" href="eliminar.php?id=<?php echo $usuario['username'];?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>

<div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>codigo</th>
                    <th>Estado</th>
                    <th>Tipo Usuario</th>
                </thead>
                <tbody>
                    <?php
                    

                        $sql ="SELECT * FROM usertable WHERE username = '$id'";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['id']?></td>
                        <td><?php echo $usuario['nombres']?></td>
                        <td><?php echo $usuario['apellidos']?></td>
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
              
-->
</body>
</html>