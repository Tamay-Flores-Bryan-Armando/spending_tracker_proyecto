<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formulario">
        <h1>Inicio de sesion</h1>
        <form action="../config/validacion.php" method="POST">
            <div class="username">
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" name="email"placeholder="usuario">
</div>
<div class="username">
                <label for="password" class="form-label"></label>
                <input type="password" class="form-control" name="password"placeholder="contraseña">
</div>

  <a href="../login/recovery.php">olvido su contraseña</a>
  <span><a href="recovery.php"></a></span>
  <input type="submit" value="Iniciar">
  <div class="registrarse">
    Quiero hacer el <a href="../usuarios/form-insert.php">registro</a>
<?php
if(isset($_GET['message'])){

    ?>
    <div class="alert alert-primary" role="alert">
    <?php
    switch ($_GET['message']){
        case 'ok':
        echo 'Por favor revisa tu correo';
        break;
        case 'Success_Password':
        echo 'Inicia sesiòn con tu nueva contraseña';
        break;
        case 'new_user':
            echo 'Nuevo usuario registrado correctamente';
            break;
            default:
            echo 'Algo salio mal, Intenta de nuevo';
    }
}
    ?>
</div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
  </div>
  </form>

</div>
</body>
</html>
