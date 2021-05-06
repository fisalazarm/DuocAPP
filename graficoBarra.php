
<html>
<?php $title = 'Reportes de Encuestas'; ?>
<?php $currentPage = 'Reportes'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>
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

<form action="graficoBarra.php" method="post" id="form" class="form-md">

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

<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Pregunta1
                    </div>
                    <div class="panel panel-body">
                        <div class="row">                            
                            <div class="col-sm-6-">
                                <div id="cargaBarras"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>

<?php
    include('conexion.php');
   
    error_reporting(E_ALL ^ E_NOTICE);
    ?>
    <?php

    $codigo = $_POST['codigo_encuesta'];

    $sql="SELECT CASE WHEN respuesta1 = 1 THEN respuesta1 / 1
                      WHEN respuesta1 = 2 THEN respuesta1 / 2
                      WHEN respuesta1 = 3 THEN respuesta1 / 3
                      WHEN respuesta1 = 4 THEN respuesta1 / 4
                      WHEN respuesta1 = 5 THEN respuesta1 / 5 end as respuestauno,
    respuesta1 
    from respuesta_encuesta WHERE id_encuestafk = '$codigo'";
    $res=mysqli_query($con,$sql);
    $valoresY=array();
    $valoresX=array();

    while ($ver = mysqli_fetch_row($res)) {
        $valoresY[]=$ver[0];
        $valoresX[]=$ver[1];
    }

    $datosX=json_encode($valoresX);
    $datosY=json_encode($valoresY);

    
?>



    
</body>
</html>

<input type="text" value="<?php echo $codigo ?>">
<div id="graficoBarra"></div>

<script type="text/javascript">
    function crearCadenaBarras(json){
        var parsed = JSON.parse(json);
        var arr = [];
        for(var x in parsed){
            arr.push(parsed[x]);
        }
        return arr;
    }
</script>

<script type="text/javascript">

    datosX = crearCadenaBarras('<?php echo $datosX ?>');
    datosY = crearCadenaBarras('<?php echo $datosY ?>');
var data = [
  {
    x: datosX,
    y: datosY,
    type: 'bar'
  }
];

Plotly.newPlot('graficoBarra', data);
</script>
