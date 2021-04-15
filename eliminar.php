
    <?php include('conexion.php'); ?>

    <?php
    error_reporting(E_ALL ^ E_NOTICE);

    $n = 'Inactive';
    $v = $_POST["viejo"];

        $sql="UPDATE usertable set status ='Inective'
        WHERE nombres = '$v'";
    //$sql="DELETE FROM usertable WHERE nombres = '$v'";
    mysqli_query($con,$sql) or die(mysqli_error()); 
    //header ("Location: prueba.php");


    ?>