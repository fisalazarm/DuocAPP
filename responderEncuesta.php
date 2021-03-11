<html>
<?php $title = 'Encuesta'; ?>
<?php $currentPage = 'responderEncuesta'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $encuesta = $_POST['codigo_encuesta'];
    $respuesta1 =$_POST['Aceptacion'];
    $respuesta2 =$_POST['Aceptacion2'];
    $respuesta3 =$_POST['Aceptacion3'];
?>
<body>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <form action="" method="post" id="divCodigo">
                <br>
                <label for="inputCodigo">Escriba el codigo de la encuesta</label>
                <br>
                <input type="text" name="codigo_encuesta" id="solo-numero" minlength="5" maxlength="6"required="" pattern="[0-9]+">
                
                <br>
                <br>
                <button type="submit" id="Enviar" name="cargarEncuesta">Enviar</button>
            </form>
        </div>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
        <form method="post">
            <h3>Conteste las siguientes preguntas respecto a la clase del dia de hoy:</h3>
            <br>
            <div class="form-group">
                <label for="inputPregunta1" name="pregunta1">
                <?php
                    $con = mysqli_connect("localhost","root","","duocapp");
                    $sql = "SELECT pregunta1,pregunta2,pregunta3 FROM  encuesta where codigo_encuesta = '$encuesta'";

                    $result = mysqli_query($con,$sql);        

                    while($mostrar = mysqli_fetch_array($result)){
                    
                    ?>

                    <tr>
                      <td> <?php echo $mostrar['pregunta1']?></td>
                    </tr>  
                   
                
                </label>
                <br>
                <div>
                    <br>                    
                
                    <label>        
                        <input type="radio" name="Aceptacion" value="1">  
                        <img class="img-fluid" src="images/Muy en desacuerdo.png" alt="ImagenMuyEnDesacuerdo">      
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="2">  
                        <img class="img-fluid" src="images/En desacuerdo.png" alt="ImagenEnDesacuerdo"> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="3">  
                        <img class="img-fluid" src="images/Neutro.png" alt=""> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="4">  
                        <img class="img-fluid" src="images/De acuerdo.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="5">  
                        <img class="img-fluid" src="images/Muy de acuerdo.png" alt="">
                    </label>
                </div>
                <br>
                <label for="inputPregunta2" name="pregunta2">
            
                    <tr>
                      <td> <?php echo $mostrar['pregunta2']?></td>
                    </tr>  
                </label>
                <br>
                <div>
                    <br>
                    <label>
                        <input type="radio" name="Aceptacion2" value="1">  
                        <img class="img-fluid" src="images/Muy en desacuerdo.png" alt="ImagenMuyEnDesacuerdo">   
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="2">  
                        <img class="img-fluid" src="images/En desacuerdo.png" alt="ImagenEnDesacuerdo"> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="3">  
                        <img class="img-fluid" src="images/Neutro.png" alt=""> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="4">  
                        <img class="img-fluid" src="images/De acuerdo.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="5">  
                        <img class="img-fluid" src="images/Muy de acuerdo.png" alt="">
                    </label>

                </div>
                <br>
                <label for="inputPregunta3" name="pregunta3">
                    <tr>
                      <td> <?php echo $mostrar['pregunta3']?></td>
                    </tr>  
                   <?php }?>
                </label>
                <br>
                <div>
                    <br>
                    <label>
                        <input type="radio" name="Aceptacion3" value="1">  
                        <img class="img-fluid" src="images/Muy en desacuerdo.png" alt="ImagenMuyEnDesacuerdo">   
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="2">  
                        <img class="img-fluid" src="images/En desacuerdo.png" alt="ImagenEnDesacuerdo"> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="3">  
                        <img class="img-fluid" src="images/Neutro.png" alt=""> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="4">  
                        <img class="img-fluid" src="images/De acuerdo.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="5">  
                        <img class="img-fluid" src="images/Muy de acuerdo.png" alt="">
                    </label>
                </div>
                <br>
            </div>
        <button id="Enviar" type="submit" class="btn btn-lg" name="Guardar">Enviar Respuesta</button>
        <?php
                if(@$_POST['submit'] || !isset($respuest1) || !isset($respuesta2) || !isset($respuesta3) || !isset($encuesta)){
                    $con = mysqli_connect("localhost","root","");
                    if (!$con) {
                        die('Could not connect: ' . mysqli_error());
                    }
                   else{
                        mysqli_select_db($con, "duocapp");
                        $ins_query="INSERT INTO respuesta_encuesta(id_encuestafk,respuesta1,respuesta2,respuesta3) values (?,?,?,?)";
                        $ins_stmt = $con->prepare($ins_query) or die($con->error);
                        $ins_stmt->bind_param("iiii", $encuesta, $respuesta1, $respuesta2, $respuesta3);
                        $ins_stmt->execute() or die($ins_stmt->error);
                    }
                }
            ?>
        </form>
    </div>

</body>
</html>