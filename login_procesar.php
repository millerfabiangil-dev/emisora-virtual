<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password']; // No escapamos, se necesita original para password_verify

    // Buscar solo por email
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Verificar la contraseña encriptada
        if (password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario['nombre'];
            header("Location: panel.php");
            exit();
        } else {
            // Contraseña incorrecta
            echo "<p style='color:red;'>❌ Usuario o contraseña incorrectos.</p>";
        }
    } else {
        // Usuario no encontrado
        echo "<p style='color:red;'>❌ Usuario o contraseña incorrectos.</p>";
    }

    echo "<a href='login.php'>🔙 Volver</a>";
} else {
    header("Location: login.php");
    exit();
}