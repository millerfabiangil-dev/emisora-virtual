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
  <title>Noticias - Emisora La Máxima</title>
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
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
    }
    .noticia {
      background: #fff;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }
    .noticia:hover {
      transform: translateY(-5px);
    }
    .noticia h3 {
      margin-top: 0;
      color: #f1c40f;
    }
    .fecha {
      font-size: 14px;
      color: #888;
    }
  </style>
</head>
<body>
  <header>
    <div class="perfil">
      <img src="img/logo-maxima.jpeg" alt="Mi Foto"> <!-- 👈 Aquí va tu foto -->
      <div>
        <h1>📰 Últimas Noticias - La Máxima</h1>
        <p>Entérate de lo más reciente en tu emisora favorita 🎶</p>
      </div>
    </div>
  </header>

  <nav>
    <a href="panel.php">⬅️ Volver al Panel</a>
  </nav>

  <main>
    <div class="noticia">
      <h3>🎤 Nuevo programa de la tarde</h3>
      <p class="fecha">Publicado: 30 Septiembre 2025</p>
      <p>DJ Max llega a La Máxima con un show interactivo lleno de sorpresas y entrevistas en vivo.</p>
    </div>

    <div class="noticia">
      <h3>📢 Sorteo de entradas</h3>
      <p class="fecha">Publicado: 29 Septiembre 2025</p>
      <p>Participa en el sorteo de entradas para el concierto del mes. Escúchanos y entérate cómo ganar.</p>
    </div>

    <div class="noticia">
      <h3>🎶 Estreno de nueva canción</h3>
      <p class="fecha">Publicado: 28 Septiembre 2025</p>
      <p>La Máxima te trae en primicia el nuevo hit de tu artista favorito. ¡No te lo pierdas!</p>
    </div>
  </main>
</body>
</html>
