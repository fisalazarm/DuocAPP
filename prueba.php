<html>
    <?php $title = 'Prueba Asignatura'; ?>
    <?php $currentPage = 'agregarAsignatura'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
    <?php
//error_reporting(E_ALL ^ E_NOTICE);
 
    

    if(isset($_POST["Asignatura"])){
        $asignatura = $_POST["Asignatura"];
        $codigoAsi = $_POST["codAsig"];
        $escuela = $_POST["escuela"];
        $optativo = $_POST["optativo"];

        $insertar ="INSERT INTO asignatura(id_asignatura, codigo_asignatura, nombre_asignatura, id_escuela, optativo) 
                      VALUES ('$codigoAsi','$asignatura','$escuela','$optativo')";
        
        $con->query($insertar);
        
        
    }
    
?>

    <body>
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
        <br>    
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <form action="agregarAsignatura.php" method="POST" id="formAsignatura" class="form-md">
            <td>
            <td>Asignatura:</td>
            <input type="text" name="Asignatura" placeholder="Indique la Asignatura" required>
            </td>
            <br>
            <br>
            <td>
            <td>Código:</td>
            <input type="text" name="codAsig" placeholder="Indique la Asignatura" required>
            </td>
            <br>
            <br>
            <td>Escuela:</td>
                    <select name="escuela" class="form-select form-select-lg mb-1" id="SelectPregunta" >
                        <option selected hidden value="" required>Indique la Escuela</option>
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
                <td>Optativo:</td>
                    <select name="optativo" class="form-select form-select-lg mb-1" >
                        <option selected hidden value="" required>¿Es optativo?</option>
                            <?php
                                $result = $con->query("select * FROM optativo");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['id_optativo']."'>".$row['descripcion']." </option>";
                                    }
                                    
                            ?>
                    </select>
                </td>
               
            <br>
            <br>
            <script>/*
                function aviso() {
                    alert("La ASignatura fue ingresada correctamente");
                }*/
            </script>
           

            <div class="text-center">
            
            <button id="Enviar" type="submit"  value="add">Agregar Asignatura</button>
            </div>
            </form>
        </div>
    </body>
</html>