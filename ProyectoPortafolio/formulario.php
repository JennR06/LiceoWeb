<?php

// --- Configuración de la conexión a la base de datos ---
// ¡Importante! Si usas XAMPP o WAMP, el usuario suele ser 'root' y la contraseña vacía.
$servername = "localhost"; // La mayoría de las veces es 'localhost'
$username = "root";        // Tu usuario de MySQL
$password = "";            // Tu contraseña de MySQL (déjala vacía si no tienes)
$dbname = "portafolio_db"; // El nombre de la base de datos que creaste

// Crea la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// --- Procesa los datos del formulario si se envió por POST ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario y sanitízalos
    // htmlspecialchars() convierte caracteres especiales a entidades HTML para prevenir XSS.
    // trim() elimina espacios en blanco al inicio y al final.
    $nombre = htmlspecialchars(trim($_POST['name']));
    $correo_electronico = htmlspecialchars(trim($_POST['email']));
    $asunto = htmlspecialchars(trim($_POST['subject']));
    $mensaje = htmlspecialchars(trim($_POST['message']));

    // Prepara la consulta SQL para insertar los datos
    // Usar sentencias preparadas es CRUCIAL para la seguridad (previene inyección SQL)
    $sql = "INSERT INTO mensajes_contacto (nombre, correo_electronico, asunto, mensaje) VALUES ('$nombre', '$correo_electronico', '$asunto', '$mensaje')";
    if ($conn->query($sql) === TRUE) {
        // Si la inserción fue exitosa, redirige a una página de agradecimiento
        header("Location: Contact.html"); // Asegúrate de tener una página thank_you.html
        exit(); // Asegúrate de salir después de redirigir
    } else {
        // Si hubo un error al insertar, muestra un mensaje
        echo "Error al enviar el mensaje: " . $conn->error;
    }
} else {
    // Si el formulario no se envió por POST, redirige a la página de contacto
    header("Location: Contact.html");
    exit();
}
// Cierra la conexión a la base de datos
$conn->close();
// Fin del script
?>
