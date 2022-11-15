<?php
require_once("../config/config.php");
$query = "SELECT * FROM gastos_categorias_2";
$conexion->query($query);
$result = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-5">
            <div class="col">
               <h1>Gastos <a href="index.php" class="btn btn-dark">Regresar</a></h1>
            </div>

            <form action="../config/insert_usuarios.php" method="POST">
    <div class="row mt-5">
        <div class="col-6">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
</div>
<div class="col-6">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" id="correo">
</div>
<div class="col-6">
            <label for="pasword" class="form-label">Contraseña</label>
            <input type="text" class="form-control" name="pasword" id="pasword">
</div>
<div class="col-6">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="telefono">
</div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
        
    </div>
</div>
    
</body>
</html>