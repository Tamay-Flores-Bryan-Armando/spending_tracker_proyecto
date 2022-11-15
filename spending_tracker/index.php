<?php
require_once("config../config.php");
$query = "SELECT g.id,g.Cantidad,c.Nombre as Categoria,g.Fecha,g.Descripcion, g.fecha FROM gastos g LEFT JOIN gastos_categorias c ON g.categoria = c.id";
$conexion->query($query);
$result = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spending_tracker</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>


<body>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
               <h1>Gastos <a href="form-insert.php" class="btn btn-primary" >Añadir</a></h1>
            </div>
            <div class="col">
          <a href="../menu/menu.php" class="btn btn-info" >Menú</a></h1>  
          </div>
        </div>
    </div>
    <div class="row mt-5">
    <div class="col">
      <table class="table table-striped table-hover">
          <thead>
            <tr>
                <th>ID</th>  
                <th>Cantidad</th>  
                <th>Categoria</th>  
                <th>Fecha de registro</th>  
                <th>Descripcion</th>  
                <th>Acciones</th>
</tr>
</thead>
<tbody>
    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
    <tr>
        <td><?php echo $row["id"]; ?> </td>
        <td><?php echo $row["Cantidad"]; ?> </td>
        <td><?php echo $row["Categoria"]; ?> </td>
        <td><?php echo $row["Fecha"]; ?> </td>
        <td><?php echo $row["Descripcion"]; ?> </td>
        <td>
            <a href="../form-update.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning" >Editar</a>
            <a href="../config/delete_spending.php?id=<?php echo $row["id"]; ?> " class="btn btn-danger" >Eliminar</a>

        </td>

</tr>
</tbody>
<?php } ?>
      </table>  
    </div>
    </div>
</body>
</html>