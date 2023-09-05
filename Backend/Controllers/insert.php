<?php
$Tarea = $_POST['Tarea'];
require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");
$sql = "INSERT INTO `tareas`(`Tarea`, `Estado`) VALUES ('$Tarea', 'Pendiente')";
mysqli_query($con, $sql);

header("location:../index.php");
?>