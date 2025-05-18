<?php
function obtenerClientes(){
    $conexion = new mysqli("localhost", "root", "", "sistema_clientes");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $resultado = $conexion->query("SELECT * FROM clientes");
    return $resultado;
}
?>