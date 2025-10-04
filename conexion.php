<?php
$servername = "localhost";
$username = "root"; // usuario por defecto en XAMPP
$password = ""; // contraseña vacía en XAMPP
$dbname = "emisora_virtual"; // 👈 nombre correcto de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
