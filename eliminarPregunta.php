<html>
<?php $title = 'Eliminar Usuarios'; ?>
<?php $currentPage = 'eliminarUsuarios'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<?php
error_reporting(E_ALL ^ E_NOTICE);

/*
    $sql = "DELETE FROM usertable WHERE id = 4";*/
?>


<form action="eliminar.php" method="post">

        <td>Pregunta:</td>
            <select name="idpregunta" class="form-select form-select-lg mb-1" id="SelectPregunta" required>
                <option selected hidden value="" required>---- Pregunta ----</option>
                    <?php
                        $result = $con->query("select * FROM preguntas_predeterminadas");
                            while ($row = $result->fetch_assoc())
                            { 
                                echo "<option required value='".$row['id_preguntas']."'>".$row['nombre_pregunta']." </option>";
                            }   
                    ?>
            </select>
        

            <input type="submit" value="Eliminar">
            
    </form>

<body>
    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
    </div>

    <div class="main-wrapper">
<br>





</body>