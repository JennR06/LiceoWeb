<?php include 'obtener_clientes.php'; ?>
<?php $resultado = obtenerClientes(); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Clientes</title>
    <link rel="stylesheet" href="styles.css">

    <body>
        <div class="contenedor">
            <h2>Listado de Clientes</h2>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                    </tr>
                    <?php while ($fila = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?= $fila['id']; ?></td>
                            <td><?= $fila['nombre']; ?></td>
                            <td><?= $fila['correo']; ?></td>
                            <td><?= $fila['telefono']; ?></td>
                        </tr>
                    <?php endwhile; ?>
            </table>
         </div>
    </body>