function validarFormulario() {
    let nombre = document.getElementById("nombre").value.trim();
    let correo = document.getElementById("correo").value.trim();

    // Validar si los campos estan vacios
    if (nombre === "" || correo === "") {
        alert("Por favor, completa todos los campos.");
        return;
    }

    // Validar el formato del correo 
    if (!correo.includes("@") || !correo.includes(".")) {
        alert("Por favor, ingresa un correo electrónico válido.");
        return;
    }

    // Si todo esta correcto
    alert("¡Formulario enviado correctamente!");
}