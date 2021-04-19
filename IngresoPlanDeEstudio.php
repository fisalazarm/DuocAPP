<!DOCTYPE html>
<?php $title = 'Plan de Estudio'; ?>
<?php $currentPage = 'Importar plan de estudio'; ?>
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
				<form class="form-horizontal well" action="insertarPlan.php" method="post" name="upload_excel" enctype="multipart/form-data">
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
				  		<th>Año</th>
				  		<th>Período</th>
				  		<th>Nombre_Sede</th>
				  		<th>Plan_Estudio</th>
				  		<th>Escuela</th>
                        <th>CodJornada</th>
                        <th>Nivel</th>
                        <th>Seccion</th>
                        <th>Cod_Asignatura</th>
                        <th>Nombre_Asignatura</th>
                        <th>Rut_Docente</th>
                        <th>Instructor</th>
 
 
				  	</tr>	
				  </thead>
			<?php
				$SQLSELECT = "SELECT * FROM plandeestudio ";
				$result_set =  mysqli_query($con, $SQLSELECT);
				while($row = mysqli_fetch_array($result_set))
				{
				?>
 
					<tr>
						<td><?php echo $row['ano']; ?></td>
						<td><?php echo $row['periodo']; ?></td>
						<td><?php echo $row['nombreSede']; ?></td>
						<td><?php echo $row['planDeEstudio']; ?></td>
						<td><?php echo $row['escuela']; ?></td>
                        <td><?php echo $row['codJornada']; ?></td>
                        <td><?php echo $row['nivel']; ?></td>
                        <td><?php echo $row['seccion']; ?></td>
                        <td><?php echo $row['codAsignatura']; ?></td>
                        <td><?php echo $row['nombreAsignatura']; ?></td>
                        <td><?php echo $row['rutDocente']; ?></td>
                        <td><?php echo $row['Instructor']; ?></td>
 
 
					</tr>
				<?php
				}
			?>
		</table>
	</div>
 
	</div>
 
	</body>
</html>