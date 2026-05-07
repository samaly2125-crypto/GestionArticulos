<?php
include 'conexion.php';
$resultado = $conexion->query("SELECT * FROM articulos");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Artículos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Gestión de Artículos</h1>

<a href="crear.php" class="btn">Agregar Artículo</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Cantidad</th>
        <th>Bodega</th>
        <th>Acciones</th>
    </tr>

    <?php while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['nombre']; ?></td>
        <td><?php echo $fila['marca']; ?></td>
        <td><?php echo $fila['cantidad']; ?></td>
        <td><?php echo $fila['bodega']; ?></td>
        <td>
            <a href="editar.php?id=<?php echo $fila['id']; ?>">Editar</a>
            |
            <a href="eliminar.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>