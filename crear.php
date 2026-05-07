<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>Agregar Artículo</h1>

<form action="guardar.php" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Marca:</label>
    <input type="text" name="marca" required>

    <label>Cantidad:</label>
    <input type="number" name="cantidad" required>

    <label>Bodega:</label>
    <input type="text" name="bodega" required>

    <button type="submit">Guardar</button>

</form>

</body>
</html>