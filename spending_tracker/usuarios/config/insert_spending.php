<?php
require_once('config.php');
$nombre = $_POST['Nombre'];
$pasword = $_POST['Pasword'];
$correo = $_POST['Correo'];
$telefono = $_POST['Telefono'];



$query = "INSERT INTO gastos (Nombre, Pasword, Correo, Telefono) VALUES ('$nombre', '$pasword', '$correo', '$telefono')";
//echo $query;
$conexion->query($query);
header("Location: ../index.php");
?>