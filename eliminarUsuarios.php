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

<body>
<form action="eliminar.php" method="post">
    <div class="form-group col-12 col-lg-6">

        <td>Usuario:</td>
            <select name="viejo" class="form-select form-select-lg mb-1" id="SelectPregunta" required>
                <option selected hidden value="" required>---- Usuario ----</option>
                    <?php
                        $result = $con->query("select * FROM usertable");
                            while ($row = $result->fetch_assoc())
                            { 
                                echo "<option required value='".$row['id']."'>".$row['username']." </option>";
                            }   
                    ?>
            </select>
        

            <input type="submit" value="Eliminar">
    </div>    
</form>

<div class="form-group col-12 col-lg-6">

    <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
    </div>
</div>
    
<br>





</body>