<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="guardar_contacto.php" method= "POST">
        <h2>Contacto</h2>
        <input type="text" name="id" placeholder="Tu Id" required>
        <input type="text" name="nombre" placeholder="Tu Nombre" required>
        <input type="text" name="apellido" placeholder="Tu Apellido" required>
        <input type="text" name="telefono" placeholder="Tu Telefono" required>
        <input type="text" name="direccion" placeholder="Tu Direccion" required>
        <input type="text" name="genero" placeholder="Tu Genero" required>
        <input type="email" name="correo" placeholder="Tu correo" required>
        <textarea name="mensaje" placeholder="Tu Mensaje" rows="5" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>