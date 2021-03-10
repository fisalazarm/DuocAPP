<html>
<?php $title = 'Encuesta'; ?>
<?php $currentPage = 'responderEncuesta'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<body>
    <div class="container-md d-flex justify-content-center"" style="background-color:white" text-center py-5>
        <form method="post">
            <h3>Conteste las siguientes preguntas respecto a la clase del dia de hoy:</h3>
            <br>
            <div class="form-group">
                <label for="inputPregunta1">¿Como calificaría el contenido del dia de hoy, Responda con la imágen que crea que es la mas correcta?</label>
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
                <label for="inputPregunta2">¿Como Calificaría la explicación del profesor ante la clase, Responda con la imágen que crea que es la mas correcta?</label>
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
                <label for="inputPregunta3">¿Como calificaría la respuesta del profesor ante preguntas, Responda con la imágen que crea que es la mas correcta?</label>
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
            <button id="Enviar" type="submit" class="btn btn-lg ">Submit</button>
        </form>
    </div>

</body>
</html>