<html>
    <?php $title = 'Prueba'; ?>
    <?php $currentPage = 'crearCuestionario'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>

    <?php
error_reporting(E_ALL ^ E_NOTICE);

    
?>
<head>
    <link rel="stylesheet" type="text/css" href="css/boostrap.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/plotly-latest.min.js"></script>
    

</head>

<body>
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
    
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Pregunta2
                    </div>
                    <div class="panel panel-body">
                        <div class="row">                            
                            <div class="col-sm-6-">
                                <div id="cargaBarras2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel panel-heading">
                        Pregunta3
                    </div>
                    <div class="panel panel-body">
                        <div class="row">                            
                            <div class="col-sm-6-">
                                <div id="cargaBarras3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaBarras').load('barra.php');

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaBarras2').load('barra2.php');

    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargaBarras3').load('barra3.php');

    });
</script>