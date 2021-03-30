<html>
    <?php $title = 'Crear Cuestionario'; ?>
    <?php $currentPage = 'crearCuestionario'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
    <?php
error_reporting(E_ALL ^ E_NOTICE);

    if(isset($_POST["pregunta1"])){
        $asignatura = $_POST["asignatura"];
        $pregAgre1 = $_POST["pregunta1"];
        $pregAgre2 = $_POST["pregunta2"];
        $pregAgre3 = $_POST["pregunta3"];
        $clase = $_POST["codigo"];

        $numRandom ="SELECT LPAD(FLOOR(RAND() * 999999.99), 6, '0') FROM DUAL";
        $insertar ="INSERT INTO encuesta (codigo_encuesta,id_clasefk,pregunta1,pregunta2,pregunta3,dia_encuesta,hora_encuesta,id_profesorfk) 
        VALUES (FLOOR(1+ RAND() * 999999),1,'$pregAgre1','$pregAgre2','$pregAgre3',curdate(),curtime(),2)";
        
        $con->query($insertar);
      /*  if($con->query($insertar) === true){
            echo '<div><form action=""><input type="checkbox">'.$pregAgre.'</form></div>';
        }else{
            die("Error al insertar datos: " . $con->error);
        }*/ 
   
    }
    
?>
    <body>
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <form action="crearCuestionario.php" method="POST" id="form" class="form-md">
            <td>
            <td>Sección:</td>
            <input type="text" placeholder="Indique su sección">
            </td>
            <br>
            <br>
            <td>Asignatura:</td>
                    <select name="asignatura" required>
                        <option selected hidden value="" required>Indique la asignatura</option>
                            <?php
                                $result = $con->query("select * FROM clases");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['nombre_clase']."'>".$row['nombre_clase']." </option>";
                                    }
                                    
                            ?>
                    </select>
                </td>
                <br>
                <br>
                
                <td>Pregunta N°1:</td>
                    <select name="pregunta1" required>
                        <option selected hidden value="" required>Seleccione la pregunta</option>
                            <?php
                                $result = $con->query("select * FROM preguntas_predeterminadas");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['nombre_pregunta']."'>".$row['nombre_pregunta']." </option>";
                                    }
                                    
                            ?>
                    </select>
                </td>
                <br>
                <br>
                <td>Pregunta N°2:</td>
                    <select name="pregunta2" required>
                        <option selected hidden value="" required>Seleccione la pregunta</option>
                            <?php
                                $result = $con->query("select * FROM preguntas_predeterminadas");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['nombre_pregunta']."'>".$row['nombre_pregunta']." </option>";
                                    }
                                    
                            ?>
                    </select>
                </td>
                <br>
                <br>
                <td>Pregunta N°3:</td>
                    <select name="pregunta3" required>
                        <option selected hidden value="" required>Seleccione la pregunta</option>
                            <?php
                                $result = $con->query("select * FROM preguntas_predeterminadas");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['nombre_pregunta']."'>".$row['nombre_pregunta']." </option>";
                                    }
                                    
                            ?>
                    </select>
                </td>
            <td>
            <br>
            <br>
            <button type="submit" value="add">Agregar Encuesta</button>
            </form>
        </div>
    </body>
</html>