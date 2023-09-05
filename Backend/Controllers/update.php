<?php

require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");
$Tarea = $_POST['Tarea'];
$ID = $_POST['id'];
$sql = "UPDATE `tareas` SET `Tarea`='$Tarea' WHERE id = $ID ";
mysqli_query($con, $sql);
    
header("location:../index.php");


?>