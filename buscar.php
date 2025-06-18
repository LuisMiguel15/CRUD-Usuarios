<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Buscar Usuario</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Resultado de Búsqueda</h1>
    <a href="index.php">← Volver</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th></tr>
        <?php
        $buscar = $_GET['buscar'];
        $resultado = $conexion->query("SELECT * FROM usuarios WHERE nombre LIKE '%$buscar%'");
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['email']}</td>
                <td>{$fila['telefono']}</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
