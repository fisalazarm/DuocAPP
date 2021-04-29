<html>
<?php $title = 'Gráfico de Reporte'; ?>
<?php $currentPage = 'grafico'; ?>
<?php include('head.php'); ?>
<?php include('nav-bar.php'); ?>
<?php include('conexion.php'); ?>

<?php
        error_reporting(E_ALL ^ E_NOTICE);

$codigo=$_POST['codigo_encuesta'];

?>

<form action="grafico.php" method="POST" id="form" class="form-md">

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
<?php
$result = $con->query("SELECT respuesta1 FROM respuesta_encuesta WHERE id_encuestafk=791394");

?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Respuesta1'],
      <?php
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "[".$row['respuesta1']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Resultados de Respuesta',
        width: 900,
        height: 500,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script>
</head>
<body>
    <!-- Display the pie chart -->
    <div id="piechart"></div>

    </form>
</body>
</html>

<!--
/*< script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
      < ?php/*
      if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "['".$row['respuesta1']."', ".$row['respuesta1']."],";
          }
      }
      ?>
    ]);
    
    var options = {
        title: 'Most Popular Programming Languages',
        width: 900,
        height: 500,
        is3D: true,
    };
    
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    
    chart.draw(data, options);
}
</script> -->

<!--<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Gráfico
            </div>
            <div class="card-body" style="padding-top:20px;">
                <div class="row">
                    <div class="col-lg-2">
                        <button class=" btn btn-primary" onclick="CargarDatosGraficoBar()">Grafico Bar</button>
                    </div>
                    <canvas id="myChart" width="400" height="400"></canvas>

                </div>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div> 
    </div>
    
</body>
    
</html>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.2.0/chart.min.js"></script>

    <script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
<script>
    function CargarDatosGraficoBar() {
        $.ajax({
            url:'controladorGrafico.php',
            type:'POST'
        }).done(function(resp) {
            alert(resp);
        })
    }

</script>