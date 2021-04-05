<html>
<?php $title = 'Encuesta'; ?>
<?php $currentPage = 'responderEncuesta'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
<?php
    error_reporting(E_ALL ^ E_NOTICE);
    $encuesta = $_POST['codigo_encuesta'];
    $respuesta1 =$_POST['Aceptacion'];
    $respuesta2 =$_POST['Aceptacion2'];
    $respuesta3 =$_POST['Aceptacion3'];
    $comentario =$_POST['Comentario'];
?>

<body>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <form action="" method="post" id="divCodigo">
                <br>
                <label for="inputCodigo">Escriba el codigo de la encuesta</label>
                <br>
                <input type="text" name="codigo_encuesta" id="" required>
                <br>
                <br>
                <div class="text-center">
                    <button type="submit" id="Enviar" name="cargarEncuesta">Enviar</button>
                </div>
            </form>
        </div>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
        <form method="post">
            <h3>Conteste las siguientes preguntas respecto a la clase del dia de hoy:</h3>
            <br>
            <div class="form-group">
                <label for="inputPregunta1" name="pregunta1">
                <?php
                    $sql = "SELECT codigo_encuesta, pregunta1,pregunta2,pregunta3 FROM  encuesta where codigo_encuesta = '$encuesta'";

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
                        <input type="radio" name="Aceptacion" value="1" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Muy en desacuerdo.png" alt="ImagenMuyEnDesacuerdo">      
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="2" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/En desacuerdo.png" alt="ImagenEnDesacuerdo"> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="3" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Neutro.png" alt=""> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="4"  id="Aceptacion" required>  
                        <img class="img-fluid" src="images/De acuerdo.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion" value="5"  id="Aceptacion" required>  
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
                        <input type="radio" name="Aceptacion2" value="1" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Muy en desacuerdo.png" alt="ImagenMuyEnDesacuerdo">   
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="2" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/En desacuerdo.png" alt="ImagenEnDesacuerdo"> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="3" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Neutro.png" alt=""> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="4" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/De acuerdo.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion2" value="5" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Muy de acuerdo.png" alt="">
                    </label>

                </div>
                <br>
                <label for="inputPregunta3" name="pregunta3">
                    <tr>
                      <td> <?php echo $mostrar['pregunta3']?></td>
                    </tr>                     
                </label>
                <br>
                <div>
                    <br>
                    <label>
                        <input type="radio" name="Aceptacion3" value="1" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Muy en desacuerdo.png" alt="ImagenMuyEnDesacuerdo">   
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="2" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/En desacuerdo.png" alt="ImagenEnDesacuerdo"> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="3" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Neutro.png" alt=""> 
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="4" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/De acuerdo.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="Aceptacion3" value="5" id="Aceptacion" required>  
                        <img class="img-fluid" src="images/Muy de acuerdo.png" alt="">
                    </label>
                </div>
                <br>
                <div>
                    <label for="inputComentario">Ingrese un comentario (Opcional)</label>
                    <br>
                    <textarea type="text" name="Comentario" id="Comentario"></textarea>
                </div>
                <div name="coden" hidden> 
                <input type="text" name="coden" value=" <?php echo $mostrar['codigo_encuesta']?>">
               
                    </div>
                <?php }?>
                <br>
            </div>
        <div class="text-center">
            <button id="Enviar" type="submit" class="btn btn-lg" name="Guardar">Enviar Respuesta</button>
        </div>
        <?php
                $codigen=$_POST["coden"];
                
                    $insert ="INSERT INTO  respuesta_encuesta (id_encuestafk,respuesta1,respuesta2,respuesta3,comentario) VALUES ($codigen,'$respuesta1','$respuesta2','$respuesta3','$comentario')";
                if(mysqli_query($con, $insert)){
                    echo "   ";
                }else{
                    echo "";
                    mysqli_error($con);
                }
                mysqli_close($con);

            ?>
        </form>
    </div>

</body>
</html>