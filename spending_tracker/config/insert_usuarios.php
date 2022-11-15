<?php
require_once('config.php');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['pasword'];
$telefono = $_POST['telefono'];



$query = "INSERT INTO gastos_categorias_2 (nombre, correo, pasword, telefono) VALUES ('$nombre', '$correo', '$contraseña','$telefono')";
//echo $query;
$conexion->query($query);
header("Location: ../login/index.php");
?>