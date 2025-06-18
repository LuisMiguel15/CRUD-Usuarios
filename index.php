<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Usuarios</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Registro de Usuarios</h1>

    <form action="agregar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="telefono" placeholder="Teléfono" required>
        <button type="submit">Agregar</button>
    </form>
    <form action="buscar.php" method="GET">
        <input type="text" name="buscar" placeholder="Buscar por nombre">
        <button type="submit">Buscar</button>
    </form>

    <table>
        <tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Acciones</th></tr>
        <?php
        $resultado = $conexion->query("SELECT * FROM usuarios");
        while ($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                <td>{$fila['id']}</td>
                <td>{$fila['nombre']}</td>
                <td>{$fila['email']}</td>
                <td>{$fila['telefono']}</td>
                <td><a href='eliminar.php?id={$fila['id']}'>Eliminar</a></td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
