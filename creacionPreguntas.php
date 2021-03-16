<html>
<?php $title = 'Creación de Preguntas'; ?>
<?php $currentPage = 'creacionPreguntas'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php
error_reporting(E_ALL ^ E_NOTICE);

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
    }   
?>
    <body>
        <div class="container-md justify-content-center" style="background-color:white" text-center py-5>
            <h2> Creación de Preguntas para las encuestas</h2>
            <br><br>
            <div>
                <form action="creacionPreguntas.php" method="POST" id="form" class="form-md">
                    <div class="form-group">
                        <td>Pregunta:</td>
                        <td><input type="text" placeholder="Escriba la Pregunta aquí" name="pregunta_predeterminada"  id="pregunta"  title="La pregunta solo debe contener signos como ¿?, letras y números del 1 al 5" required></td>
                    </div>
                        <td>
                            <td>Tipo Pregunta:</td>
                            <select name="nombre_tipo_pregunta" required>
                                <option selected hidden value="" required>Seleccione el Tipo</option>
                                <?php
                                    $result = $con->query("select * FROM tipo_pregunta");
                                    while ($row = $result->fetch_assoc())
                                    { echo "<option required value='".$row['id_tipo_pregunta']."'>".$row['nombre_tipo_pregunta']." </option>";}
                                ?>
                            </select>
                        </td>
                    </div>
                    <button type="submit" value="add">Agregar Pregunta Predeterminada</button>
                </form>
            </div>
        </div>
    </body>
</html>