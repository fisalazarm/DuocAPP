<!DOCTYPE html>
<?php $title = 'Carga Masiva de usuarios'; ?>
<?php $currentPage = 'Carga masiva de usuarios'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
<html lang="es">
	<body>

	<div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
 
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="insertarUsuario.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset class="container-md d-flex justify-content-center">
						<legend>Importar CSV/Excel Archivo</legend>
						<div class="control-group">
							<div class="control-label">
								<label>Archivo CSV/Excel:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
                            <br>
						</div>
 
						<div class="control-group ">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Subir Archivo</button>
							</div>
						</div>
                        <br>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
 
		<table class="table table-bordered">
			<thead>
				  	<tr>
				  		<th>Nombres</th>
				  		<th>Apellidos</th>
				  		<th>Usuario</th>
				  		<th>Email</th>
				  		<th>Contraseña</th>
                        <th>Tipo_Usuario</th>
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT nombres,apellidos,username,email,password,tipo_usuario FROM usertable ";
				$result_set =  mysqli_query($con, $SQLSELECT);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
 
					<tr>
						<td><?php echo $row['nombres']; ?></td>
						<td><?php echo $row['apellidos']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['tipo_usuario']; ?></td> 
					</tr>
				<?php
				}
			?>
		</table>
	</div>
 
	</div>
 
	</body>
</html>