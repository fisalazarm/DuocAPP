<?php 

error_reporting(E_ALL ^ E_NOTICE);


$idU  =  $_POST["id_usuario"];
$sql = "DELETE FROM usertable WHERE id = '$idU'";
$con->query($sql);
?>