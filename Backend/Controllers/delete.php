<?php

require_once($_SERVER['DOCUMENT_ROOT']."/To-do-list/Backend/include/config.php");
$id=$_GET['ID'];
$sql = "DELETE FROM `tareas` WHERE id = $id";
mysqli_query($con, $sql);

header("location:../index.php");
?>