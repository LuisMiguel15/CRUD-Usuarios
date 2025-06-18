<?php
include "db.php";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

$conexion->query("INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')");
header("Location: index.php");
?>
