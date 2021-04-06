<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html>
<?php $title = 'Registro de Usuarios'; ?>
<?php $currentPage = 'signup-user'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
<link rel="stylesheet" href="css/styles2.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Formulario de Registro</h2>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="username" placeholder="Usuario" required value="<?php echo $usuario ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirmar Contraseña" required>
                    </div>
                    <div class="form-group">
                    <select name="tipo_usuario" required>
                                <option name="id_tipo_usuario" selected hidden value="" required>Seleccione el usuario</option>
                                <?php
                                    $result = $con->query("select * FROM tipo_usuario");
                                    while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['id_tipo_usuario']."'>".$row['descripcion_usuario']." </option>";           
                                    }                                    
                                ?>
                            </select>
                    </div>                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">¿Ya eres un usuario?
                      <a href="login-user.php">Inicia Sesion</a>
                    </div>
                    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
                        <button onclick="history.go(-1);" id="Enviar">Volver </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
