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
      padding: 30px;
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

    .volver {
      display: inline-block;
      margin-top: 15px;
      color: #FFD700;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .volver:hover {
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
    <h1>🎤 Regístrate</h1>
    <form action="registro_exito.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" 
             pattern="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{1,20}" 
             title="Solo letras y espacios, máximo 20 caracteres" 
             required>

      <label for="email">Correo:</label>
      <input type="email" id="email" name="email" 
             pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" 
             title="Ingresa un correo válido" 
             required>

      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Registrarme</button>
    </form>
    <a href="index.php" class="volver">⬅ Volver al inicio</a>
  </div>
</body>
</html>