<?php require_once "controllerUserData.php"; ?>
<?php 
$usuario = $_SESSION['username'];
$password = $_SESSION['password'];
if($usuario != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE user = '$usuario'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php $title = 'Index'; ?>
<?php $currentPage = 'index'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
</head>
<body>
    <h2>Bienvenido <?php echo $fetch_info['user'] ?></h2>
</body>
</html>