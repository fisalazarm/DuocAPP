<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<?php $title = 'Login'; ?>
<?php $currentPage = 'login-user'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
<link rel="stylesheet" href="css/styles2.css">
<body>
    <div class="container">
        <div class="row" id="login"> 
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulario de Login</h2>
                    <p class="text-center">Ingresa con tu usuario y contraseña.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="username" name="username" placeholder="Usuario" required value="<?php echo $usuario ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left">
                      <a href="forgot-password.php">¿Olvidaste tu contraseña?</a>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">¿Aun no estas registrado?
                     <a href="signup-user.php">Registrate</a>
                  </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>