<?php
session_start();
include 'conexion.php';

$error = '';

// Procesar formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Verificar si el correo existe
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $error = "❌ El correo no está registrado.";
    } else {
        $usuario = $result->fetch_assoc();

        // Verificar contraseña con password_verify (porque está hasheada)
        if (password_verify($password, $usuario['password'])) {
            // Login correcto
            $_SESSION['usuario'] = $usuario['nombre'];
            header("Location: panel.php");
            exit();
        } else {
            $error = "❌ Contraseña incorrecta.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Iniciar Sesión - Emisora La Máxima</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1c1c1c, #000);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      text-align: center;
    }

    .container {
      background: #222;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0,0,0,0.5);
      width: 350px;
      animation: fadeIn 1s ease-in-out;
    }

    h1 {
      color: #FFD700;
      margin-bottom: 20px;
    }

    label {
      display: block;
      text-align: left;
      margin: 10px 0 5px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 10px;
      border: none;
      outline: none;
      background: #333;
      color: #fff;
    }

    input:focus {
      box-shadow: 0 0 5px #FFD700;
    }

    button {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 30px;
      background: #FFD700;
      color: #000;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      background: #000;
      color: #FFD700;
      transform: scale(1.05);
    }

    .error {
      background: #ff4d4d;
      color: #fff;
      padding: 12px;
      border-radius: 10px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .enlaces {
      margin-top: 15px;
    }

    .enlaces a {
      color: #FFD700;
      text-decoration: none;
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }

    .enlaces a:hover {
      color: #fff;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🎵 Iniciar Sesión</h1>

    <?php if ($error): ?>
      <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form action="login.php" method="POST" novalidate>
      <label for="email">Correo electrónico:</label>
      <input type="email" id="email" name="email" required value="<?= isset($email) ? htmlspecialchars($email) : '' ?>">

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Entrar</button>
    </form>

    <div class="enlaces">
      <a href="registro.php">📋 ¿No tienes cuenta? Regístrate</a>
      <a href="index.php">🏠 Volver al inicio</a>
    </div>
  </div>
</body>
</html>