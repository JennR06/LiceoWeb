<?php
// conexion a la base de datos
$conexion = new mysqli("localhost", "root", "", "tabla_agenda");
// verificar la conexion
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
// capturar datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$genero = $_POST['genero'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar datps en la tabla de datos
$sql = "INSERT INTO contactos (id,nombre,apellido,telefono,direccion,genero, correo, mensaje) VALUES ('$id','$nombre', 
'$apellido','$telefono','$direccion','$genero','$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Contacto enviado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>