<?php
$conexion = new mysqli("localhost", "root", "", "crud_db");
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
