<?php
require_once('config.php');
$id = $_GET['id'];


$query = "DELETE FROM gastos WHERE id=$id";
//echo $query;
$conexion->query($query);
header("Location: ../index.php");
?>