<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Programación Musical - Emisora La Máxima</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f9e79f, #2c2c2c);
      color: #333;
    }
    header {
      background: #1c1c1c;
      color: #fff;
      padding: 25px;
      text-align: center;
    }
    header .perfil {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
    }
    header img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      border: 3px solid #f9e79f;
      object-fit: cover;
    }
    header h1 {
      margin: 0;
      font-size: 28px;
      color: #f4d03f;
    }
    header p {
      margin: 5px 0 0;
      font-size: 16px;
      color: #ddd;
    }
    nav {
      background: #2c2c2c;
      padding: 12px;
      text-align: center;
    }
    nav a {
      background: #f4d03f;
      color: #000;
      padding: 10px 18px;
      margin: 5px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: all 0.3s;
      display: inline-block;
    }
    nav a:hover {
      background: #d4ac0d;
      color: #fff;
    }
    main {
      padding: 30px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    th, td {
      padding: 15px;
      text-align: center;
    }
    th {
      background: #f4d03f;
      color: #000;
      font-size: 18px;
    }
    tr:nth-child(even) {
      background: #fdf5d4;
    }
    tr:hover {
      background: #f7f1cc;
      transition: 0.3s;
    }
    td {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <header>
    <div class="perfil">
      <img src="img/logo-maxima.jpeg" alt="Mi Foto"> <!-- 👈 Reemplaza con tu imagen -->
      <div>
        <h1>🎶 Programación Musical</h1>
        <p>Descubre nuestros programas y acompáñanos en cada momento del día 📻</p>
      </div>
    </div>
  </header>

  <nav>
    <a href="panel.php">⬅️ Volver al Panel</a>
  </nav>

  <main>
    <table>
      <tr>
        <th>Horario</th>
        <th>Programa</th>
        <th>DJ / Locutor</th>
      </tr>
      <tr>
        <td>06:00 AM - 09:00 AM</td>
        <td>🌅 Despierta con La Máxima</td>
        <td>DJ Camilo</td>
      </tr>
      <tr>
        <td>09:00 AM - 12:00 PM</td>
        <td>🔥 Éxitos del Momento</td>
        <td>DJ Andrea</td>
      </tr>
      <tr>
        <td>12:00 PM - 03:00 PM</td>
        <td>🎤 La Hora Urbana</td>
        <td>DJ Kevin</td>
      </tr>
      <tr>
        <td>03:00 PM - 06:00 PM</td>
        <td>🎶 Clásicos de Ayer y Hoy</td>
        <td>DJ Laura</td>
      </tr>
      <tr>
        <td>06:00 PM - 09:00 PM</td>
        <td>🌙 La Noche en La Máxima</td>
        <td>DJ Sebastián</td>
      </tr>
    </table>
  </main>
</body>
</html>