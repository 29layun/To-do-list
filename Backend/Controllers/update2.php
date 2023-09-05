<?php

require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");
$ID = $_POST['id'];
$sql = "UPDATE `tareas` SET `Estado`='Finalizada' WHERE id = $ID ";
mysqli_query($con, $sql);
    
header("location:../index.php");


?>