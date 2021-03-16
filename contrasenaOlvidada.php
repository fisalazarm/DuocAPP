

<!DOCTYPE html>
<html>
<?php $title = 'Recuperacion Constraseña'; ?>
<?php $currentPage = 'contasenaOlvidada'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

    <link rel="stylesheet" href="css/recuperacion.css" type="text/css" media="all" />

<body>
   
	<div class="container">
		<h2>Ingresa tu Dirección de Correo Electrónico para recuperar su Contraseña</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="Correo" required="">
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="Continuar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>