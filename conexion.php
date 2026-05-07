<?php
$conexion = new mysqli("mysql-marcela.alwaysdata.net", "marcela", "lina123.", "marcela_gestion_articulos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
