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
  <title>Panel - Emisora La Máxima</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f9e79f, #2c2c2c); /* dorado suave con negro gris */
      color: #333;
    }
    header {
      background: #1c1c1c; /* negro suave */
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
      width: 120px;  /* ✅ más grande */
      height: 120px;
      border-radius: 50%;
      border: 3px solid #f9e79f; /* borde dorado suave */
      object-fit: cover;
    }
    nav {
      background: #2e2e2e;
      padding: 12px;
      text-align: center;
    }
    nav a {
      color: #f4d03f; /* dorado más apagado */
      margin: 0 15px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }
    nav a:hover {
      color: #fff;
    }
    main {
      padding: 30px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }
    .card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      transition: transform 0.3s;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .card:hover {
      transform: translateY(-5px);
    }
    .card h2 {
      margin-top: 0;
      color: #d4ac0d; /* dorado oscuro */
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      border-radius: 8px;
      background: #f4d03f;
      color: #000;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s;
      align-self: flex-end;
    }
    .btn:hover {
      background: #d4ac0d;
    }
  </style>
</head>
<body>
  <header>
    <div class="perfil">
      <img src="img/logo-maxima.jpeg" alt="Mi Foto"> <!-- 👈 Reemplaza este archivo -->
      <div>
        <h1>📻 Bienvenido, <?= $_SESSION['usuario']; ?>!</h1>
        <p>Disfruta de la mejor música y mantente informado con la Maxima ,tu emisora</p>
      </div>
    </div>
  </header>

  <nav>
    <a href="canciones.php" class="btn">Ir a Mis Canciones</a>
    <a href="programacion.php">📅 Programación</a>
    <a href="noticias.php">📰 Noticias</a>
    <a href="cerrar_sesion.php">🚪 Cerrar Sesión</a>
  </nav>

  <main>
    <!-- Noticias -->
    <div class="card">
      <h2>📰 Últimas Noticias</h2>
      <p>🎤 Nuevo programa de la tarde con DJ Max.</p>
      <p>📢 Sorteo de entradas para el concierto del mes.</p>
      <a href="noticias.php" class="btn">Ver más</a>
    </div>

    <!-- Programación musical -->
    <div class="card">
      <h2>🎶 Programación Musical</h2>
      <p>✅ Salsa y Merengue: 8:00 AM - 10:00 AM</p>
      <p>✅ Reguetón Hits: 10:00 AM - 1:00 PM</p>
      <p>✅ Música Variada: 2:00 PM - 6:00 PM</p>
      <a href="programacion.php" class="btn">Ver programación</a>
    </div>

    <!-- Música / Reproductor -->
    <div class="card">
      <h2>🎧 Reproductor en Vivo</h2>
      <p>Escucha nuestra emisora en línea.</p>
      <audio controls>
        <source src="musica/cancion1.mp3" type="audio/mpeg">
        Tu navegador no soporta audio en vivo.
      </audio>
    </div>
  </main>
</body>
</html>