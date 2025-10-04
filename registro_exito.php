<?php
include 'conexion.php';

// Escapar datos para mayor seguridad
$nombre   = mysqli_real_escape_string($conn, $_POST['nombre']);
$email    = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Validar si el email ya existe
$check = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($check);

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registro - Emisora La Máxima</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #111;
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
    h2 {
      color: #FFD700;
      margin-bottom: 20px;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      padding: 12px 25px;
      background: #FFD700;
      color: #000;
      border-radius: 30px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
    }
    a:hover {
      background: #000;
      color: #FFD700;
    }
    @keyframes fadeIn {
      from {opacity: 0; transform: scale(0.9);}
      to {opacity: 1; transform: scale(1);}
    }
  </style>
</head>
<body>
  <div class="container">
    <?php
    if ($result->num_rows > 0) {
        echo "<h2>❌ El correo <strong>$email</strong> ya está registrado.</h2>";
        echo "<a href='registro.php'>Intentar con otro correo</a>";
    } else {
        // Encriptar la contraseña antes de guardar
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre, email, password, fecha_registro) 
                VALUES ('$nombre', '$email', '$password_hash', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "<h2>✅ Registro exitoso, bienvenido $nombre 🎶</h2>";
            echo "<a href='login.php'>Iniciar sesión</a>";
        } else {
            echo "<h2>❌ Error al registrar</h2>";
            echo "<a href='registro.php'>Intentar de nuevo</a>";
        }
    }

    $conn->close();
    ?>
  </div>
</body>
</html>
