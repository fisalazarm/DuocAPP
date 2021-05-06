<html>
    <?php $title = 'Prueba'; ?>
    <?php $currentPage = 'crearCuestionario'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>

    <?php
error_reporting(E_ALL ^ E_NOTICE);

    
?>
<?php
        error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        $usuario = $_SESSION['username'];

?>
<head>
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/plotly-latest.min.js"></script>
    

</head>

<body>


<div class="form-group col-12 col-lg-6">
                <label>Encuesta:</label>
                <select name="codigo_encuesta" required>
                    <option name="idPregunta" selected hidden value="" required>seleccione la Encuesta</option>
                        <?php
                            $result = $con->query("SELECT 	codigo_encuesta,
                                                    CONCAT(enc.id_profesorfk,' ', asi.nombre_asignatura,' ' ,enc.dia_encuesta) as 'clase'
                                                    from encuesta enc
                                                    INNER JOIN asignatura asi ON enc.id_clasefk = asi.id_asignatura 
                                                    where id_profesorfk ='$usuario'");
                                while ($row = $result->fetch_assoc())
                                    { 
                                        echo "<option required value='".$row['codigo_encuesta']."'>".$row['clase']." </option>";           
                                    }                                    
                        ?>
                </select>

                <input type="submit" value="Aceptar">                
</div>
<?php include('graficoBarra2.php'); ?>
