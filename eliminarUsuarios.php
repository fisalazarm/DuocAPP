<html>
<?php $title = 'Eliminar Usuarios'; ?>
<?php $currentPage = 'eliminarUsuarios'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<?php
error_reporting(E_ALL ^ E_NOTICE);

/*
    $sql = "DELETE FROM usertable WHERE id = 4";*/
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 4px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
    background-color: #4CAF50;
    color: white;
}
.main-wrapper{
	width:50%;
	
	background:#E0E4E5;
	border:1px solid #292929;
	padding:25px;
}
hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #eee;
}
</style>


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
                                        echo "<option required value='".$row['nombres']."'>".$row['username']." </option>";
                                    }                              
                                    
                            ?>
                    </select>
                </td>

            <input type="submit" value="Actualizar">
            
    </form>

<body>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
    </div>

    <div class="main-wrapper">
<br>


<table border="1" width="50%">
	<tr>
        <th width="41%">id</th>
		<th width="41%">Nombres</th>
		<th width="50%">Apellidos</th>
        <th width="50%">Usuario</th>
        <th width="50%">Email</th>
        <th width="100%">Contraseña</th>
        <th width="50%">Estatus</th>
        <th width="100%">Tipo Usuario</th>
		<th width="9%">Opcion</th>
	</tr>
<?php 

	$sql = "select * from usertable";
	$result =mysqli_query($con,$sql);
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
        <td><?php echo $usuario['status']?></td>
        <td><?php echo $usuario['tipo_usuario']?></td>
		<td>
   <a class="btn btn-primary" href="eliminar.php?id=<?php echo $row->id;?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></a>
        </td>
	</tr>
	<?php } ?>
</table>,
</div>
<?php


function delete($tblname,$field_id,$id){ //Funcion para borrar registros

    $sql = "DELETE FROM usertable WHERE id = '$idU'";
	return db_query($sql);
}

function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);

	return $sql;
}
?>



</body>