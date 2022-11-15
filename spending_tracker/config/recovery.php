<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMPT;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
$email = $_POST['email'];



$query="SELECT *FROM gastos_categorias_2 WHERE correo='$email' AND status=1";
$conexion->query($query);
$result = $conexion->query($query);
//echo $query
$row = $result->fetch_assoc();


if ($result->num_rows > 0){
    $mail = new PHPMailer(true);
try {


$mail->isSMTP();
$mail->Host       = 'smtp-mail.outlook.com';
$mail->SMTPAuth   = true;
$mail->Username   = '00694679@red.unid.mx';
$mail->Password   = 'Tamayflores1212';
$mail->Port       = 587;

$mail->setFrom('00694679@red.unid.mx', 'Spending Tracker');
$mail->addAddress('bryan14141212@gmail.com', 'Joe User');


$mail->isHTML(true);
$mail->Subject = 'Recuperacion de password';
$mail->Body    = 'Hola, Este es un correo generado para solicitar tu recuperacion de contraseña, Por favor visita la siguiente pagina
<a href="localhost/spending_tracker/change_password.php?id='.$row['id'].'"> recuperar password </a>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
header("location: ../login/index.php?message=ok");
} catch (Exception $e) {
    header("location: ../login/index.php?message=error");
}

}else{
    header("location: ../login/index.php?message=not_found");
}

?>