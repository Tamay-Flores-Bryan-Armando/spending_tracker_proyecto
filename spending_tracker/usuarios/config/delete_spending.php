<?php
require_once('../../config/config.php');
$id = $_GET['id'];


$query = "DELETE FROM gastos_categorias WHERE id=$id";
//echo $query;
$conexion->query($query);
header("Location: ../index.php");
?>