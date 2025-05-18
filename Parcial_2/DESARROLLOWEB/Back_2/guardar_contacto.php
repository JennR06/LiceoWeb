<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_contacto");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>