<html>
    <?php $title = 'Crear Cuestionario'; ?>
    <?php $currentPage = 'crearCuestionario'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
    <?php
error_reporting(E_ALL ^ E_NOTICE);
    session_start();
    $usuario = $_SESSION['username'];
    

    if(isset($_POST["pregunta1"])){
        $asignatura = $_POST["asignatura"];
        $pregAgre1 = $_POST["pregunta1"];
        $pregAgre2 = $_POST["pregunta2"];
        $pregAgre3 = $_POST["pregunta3"];
        $seccion = $_POST["codseccion"];

        $numRandom ="SELECT LPAD(FLOOR(RAND() * 999999.99), 6, '0') FROM DUAL";
        $insertar ="INSERT INTO encuesta (codigo_encuesta,id_clasefk,seccion,pregunta1,pregunta2,pregunta3,dia_encuesta,hora_encuesta,id_profesorfk) 
        VALUES (FLOOR(1+ RAND() * 999999),'$asignatura','$seccion','$pregAgre1','$pregAgre2','$pregAgre3',curdate(),curtime(),'$usuario')";
        
        $con->query($insertar);
        
   
    }
    
?>
<?php
    
  

?>

    <body>
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>pul
        <br>    
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <form action="crearCuestionario.php" method="POST" id="formCuestionario" class="form-md">
            <td>
            <td>Sección:</td>
            <input type="text" name="codseccion" placeholder="Indique su sección" required>
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
                                        echo "<option required value='".$row['id_clase']."'>".$row['nombre_clase']." </option>";
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
            <script>
                function aviso() {
                    alert("La encuesta fue creada exitosamente");
                }
            </script>
           

            <div class="text-center">
            
            <button id="Enviar" type="submit"  onclick="aviso()" value="add">Agregar Encuesta</button>
            </div>
            </form>
        </div>
    </body>
</html>