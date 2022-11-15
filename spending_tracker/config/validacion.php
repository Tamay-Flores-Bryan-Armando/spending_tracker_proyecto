<?php
require_once('config.php');
$email = $_POST['email'];
$pass = $_POST['password'];
session_start();
$_SESSION['email']=$email;


$query = "SELECT * FROM gastos_categorias_2  WHERE correo = '$email' AND pasword ='$pass' AND status=1";
$conexion->query($query);
$result = $conexion->query($query);
//echo $query
$row = $result->fetch_assoc();

//print_r ($result);



if($row){
    header("location: ../menu/menu.php");
}else{
    ?>
    <?php
    header("Location: ../login/index.php");
    ?>
 
    <?php
}
mysqli_free_result($result);
mysqli_close($conexion);