<html>
<?php $title = 'Agregar Asignatura'; ?>
<?php $currentPage = 'agregarAsignatura'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<?php
error_reporting(E_ALL ^ E_NOTICE);
/*
    if(!isset($pregunta) || !isset($tipoPregunta)){
        $con = mysqli_connect("localhost","root","");
        if (!$con) {
            die('Could not connect: ' . mysqli_error());
        }
       else{
            mysqli_select_db($con, "duocapp");
            $nombre_tipo_pregunta =$_REQUEST['nombre_tipo_pregunta'];
            $pregunta_predeterminada =$_POST['pregunta_predeterminada'];
            $ins_query= "INSERT INTO preguntas_predeterminadas (nombre_pregunta, id_tipo_preguntafk)
            SELECT nombre_tipo_pregunta, id_tipo_pregunta
            FROM tipo_pregunta
            WHERE id_tipo_pregunta = ?";
            $ins_stmt = $con->prepare($ins_query) or die($con->error);
            $ins_stmt->bind_param("s", $nombre_tipo_pregunta);
            $ins_stmt->execute() or die($ins_stmt->error);

        }   
    }   */

    if(isset($_POST["asignatura"])){
        $asignatura = $_POST["asignatura"];
        $codigoAsi = $_POST["codigo"];
        $escuela = $_POST['nombre_escuela'];
        $optativo = $_POST["optativo"];


        $insertar ="INSERT INTO asignatura(codigo_asignatura, nombre_asignatura, id_escuela)
        VALUES ('$codigoAsi','$asignatura','$escuela')";
        
        $con->query($insertar);

    }


?>
    <body>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
        <button onclick="history.go(-2);" id="Enviar" style="font-size: 25px">Volver </button>
    </div>



        <main class="row p-4">
        <article class="col-12 col-md-6">
            <h5 class="mb-4">Registrar Asignatura</h5>
            <form action="agregarAsignatura.php" method="POST" id="form" class="form-md">
                <div class="form-group col-12 col-lg-6">
                    <label>Asignatura:</label>
                    <input type="text" placeholder="Ej: Matemáticas" name="asignatura"class="form-control" required>
                </div>
                <div class="form-group col-12 col-lg-6">
                    <label>Código:</label>
                    <input type="text" placeholder="AAA0000" name="codigo" class="form-control" required>
                </div>
                <div class="form-group col-12 col-lg-6">
                    <label>Escuela:</label>
                    <select name="nombre_escuela" required>
                        <option name="idPregunta" selected hidden value="" required>Indique la Escuela</option>
                            <?php
                                $result = $con->query("select * FROM escuela");
                                    while ($row = $result->fetch_assoc())
                                        { 
                                            echo "<option required value='".$row['id_escuela']."'>".$row['nombre_escuela']." </option>";           
                                        }                                    
                            ?>
                    </select>
                    
                </div>
                <!-- left, center, right, justify -->
                <div class="col-12 text-right">                    
                    <button type="submit" onclick="aviso()" id="Enviar" value="add">Agregar Asignatura</button>
                </div>
                <script>
                        function aviso() {
                            alert("Asignatura agregada");
                            
                        }
                    </script>
                        
            </form>
        </article>
    </main>
    
    <div>
    <h2>Cargar todas las Asignaturas</h2>
    <?php
        $insertar=  "INSERT INTO `asignatura`(`codigo_asignatura`, `nombre_asignatura`, `id_escuela`) 
                    SELECT DISTINCTROW codAsignatura,nombreAsignatura,
                       CASE WHEN escuela = 'Diseño' THEN 1
                            WHEN escuela = 'Informática y Telecomunicaciones' THEN 2 
                            WHEN escuela = 'Administración y Negocios' THEN 3
                            WHEN escuela = 'Extracurricular Deportes Ancla' THEN 4
                            WHEN escuela = 'Extracurricular Selecciones Deporte' THEN 5
                            WHEN escuela = 'Extracurricular Asuntos Estudiantiles' THEN 6
                            WHEN escuela = 'Programa de Emprendimiento' THEN 7
                            WHEN escuela = 'Programa de Etica' THEN 8
                            WHEN escuela = 'Programa de Inglés' THEN 9
                            WHEN escuela = 'Programa de Matemáticas' THEN 10
                            WHEN escuela = 'Comunicación' THEN 11
                            WHEN escuela = 'Programa de Formación Cristiana' THEN 12
                            WHEN escuela = 'Programa de Lenguaje y Comunicación' THEN 13
                            WHEN escuela = 'Construcción' THEN 14
                            WHEN escuela = 'Escuela' THEN 15
                            WHEN escuela = ' ' THEN 0
                            END
                    FROM plandeestudio";
                    $con->query($insertar);
    ?>

    <input type="submit" id="Enviar" value="Cargar Asignaturas">

    </div>

   
    

    </body>
</html>