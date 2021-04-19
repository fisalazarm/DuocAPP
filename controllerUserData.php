<?php 
session_start();
require "conexion.php";
$email = "";
$usuario = "";
$errors = array();
error_reporting(0);

//if user signup button
if(isset($_POST['signup'])){
    $rut = mysqli_real_escape_string($con, $_POST['rut']);
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $usuario = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $username_check = "SELECT * FROM usertable WHERE username = '$usuario'";
    $res = mysqli_query($con, $username_check);
    if(mysqli_num_rows($res) > 0){
        $errors['username'] = "¡El usuario que ingresaste ya existe!";
    }
    if(count($errors) === 0){
        //$encpass = password_hash($password, PASSWORD_BCRYPT);
        $encpass=$_POST['cpassword'];
        $code = rand(999999, 111111);
        $status = "notverified";
        $tipoU = $_POST['tipo_usuario'];
        $insert_data = "INSERT INTO usertable (rut_usuario,nombres,apellidos,username, email, password, code, status,tipo_usuario)
                        values('$rut','$nombre','$apellido','$usuario', '$email', '$encpass', '$code', '$status','$tipoU')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Codigo de verificación de Email";
            $message = "Tu código de verificación es: $code";
            $sender = "From: fabian.salazar.mallea@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "Te enviamos un código de verificación a - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                echo "<script>
                alert('Usuario Registrado');
                window.location= 'user-otp.php'
                </script>";
                //header('location: user-otp.php');
                exit();
     /*       }else{
                $errors['otp-error'] = "Fallo el envío del código!";*/
            }
        /*}else{
            $errors['db-error'] = "No se pudo registrar usuario en la Base de Datos!";*/
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['username'] = $usuario;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{
                $errors['otp-error'] = "Falló la actualización del código!";
            }
        }else{
            $errors['otp-error'] = "Ingresaste el código incorrecto!";
        }
    }

    // controlador de boton logín o inicio de sesiónF
    if(isset($_POST['login'])){
        $usuario = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $username_check = "SELECT * FROM usertable WHERE user = '$usuario'";
        $res = mysqli_query($con, $username_check);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['username'] = $usuario;
                $_SESSION['password'] = $password;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['username'] = $usuario;
                    header('location: home.php');
                }else{
                    $info = "Aún no has verificado tu correo - $usuario";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['username'] = "Usuario o Contraseña erroneo";
            }
        }else{
            $errors['username'] = "Parece que no te has registrado aún.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Codigo de recuperación de contraseña";
                $message = "Tu código de recuperación es $code";
                $sender = "From: fabian.salazar.mallea@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "Mandamos tu código de recuperación a: - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "No se pudo mandar el código!";
                }
            }else{
                $errors['db-error'] = "Algo ocurrió mal!";
            }
        }else{
            $errors['email'] = "Este correo no existe!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Por favor crea una contraseña que utilices en otro sitio.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "Ingresaste el código equivocado!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Las contraseña no coinciden!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Tu contraseña cambio, ahora puedes ingresar.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Falló el cambio de la contraseña!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }
?>
