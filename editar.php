<?php
include 'conexion.php';

$id = $_GET['id'];
$resultado = $conexion->query("SELECT * FROM articulos WHERE id=$id");
$fila = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Editar Artículo</h1>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>" required>

    <label>Marca:</label>
    <input type="text" name="marca" value="<?php echo $fila['marca']; ?>" required>

    <label>Cantidad:</label>
    <input type="number" name="cantidad" value="<?php echo $fila['cantidad']; ?>" required>

    <label>Bodega:</label>
    <input type="text" name="bodega" value="<?php echo $fila['bodega']; ?>" required>

    <button type="submit">Actualizar</button>

</form>

</body>
</html>