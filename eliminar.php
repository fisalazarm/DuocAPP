
    <?php include('head.php'); ?>

    <?php include('conexion.php'); ?>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);

    $n = 'Inactive';
    $v = $_POST["viejo"];

        /*$sql="UPDATE usertable set status ='$n'
        WHERE nombres = '$v'";*/
    $sql="DELETE FROM usertable WHERE id = '$v'";
    mysqli_query($con,$sql) or die(mysqli_error()); 
    //header ("Location: prueba.php");
        echo "Registro Eliminado";


    ?>
     <?php


    $v = $_POST["idpregunta"];

        /*$sql="UPDATE usertable set status ='$n'
        WHERE nombres = '$v'";*/
    $sql="DELETE FROM preguntas_predeterminadas WHERE id_preguntas = '$v'";
    mysqli_query($con,$sql) or die(mysqli_error()); 
    //header ("Location: prueba.php");


    ?>
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-2);" id="Enviar" style="font-size: 25px">Volver </button>
    </div>