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
        <br>
        <div class="container-md justify-content-center" style="background-color:white" text-center py-5>
            <h2> Ingresar Asignaturas</h2>
            <br><br>
            <div>
                <form action="agregarAsignatura.php" method="POST" id="form" class="form-md">
                <td>
                    <td>Asignatura:</td>
                    <td><input type="text" placeholder="Ej: Matemáticas" name="asignatura" required></td>
                </td>
                <br>
                <br>
                <td>
                    <td>Código:</td>
                    <td><input type="text" placeholder="AAA0000" name="codigo" required></td>
                </td>
                <br>
                <br>
                    <td>Escuela:</td>
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
                    </td>
                    <br>
                    <br>
                  
                    <script>
                        function aviso() {
                            alert("Asignatura agregada");
                        }
                    </script>
                        <button type="submit" id="Enviar" value="add">Agregar Asignatura</button>
                </form>
            </div>
        </div>
    </body>
</html>