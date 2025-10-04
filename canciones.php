<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
include 'conexion.php';
$result = $conn->query("SELECT * FROM canciones_favoritas");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mis Canciones Favoritas</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #f9e79f, #2c2c2c);
      color: #333;
      text-align: center;
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
    nav {
      margin: 20px 0;
    }
    a.btn {
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
    a.btn:hover {
      background: #d4ac0d;
      color: #fff;
    }
    table {
      margin: 20px auto;
      border-collapse: collapse;
      width: 85%;
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }
    th, td {
      padding: 14px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }
    th {
      background: #f4d03f;
      color: #000;
      font-size: 16px;
    }
    tr:hover {
      background: #fdf5d4;
    }
  </style>
</head>
<body>
  <header>
    <div class="perfil">
      <img src="img/logo-maxima.jpeg" alt="Mi Foto"> <!-- 👈 Reemplázala por tu foto -->
      <div>
        <h1>🎵 Mis Canciones Favoritas</h1>
        <p>Bienvenido <?= $_SESSION['usuario']; ?>, aquí puedes gestionar tu playlist personal.</p>
      </div>
    </div>
  </header>

  <nav>
    <a href="cancion_agregar.php" class="btn">➕ Agregar Canción</a>
    <a href="panel.php" class="btn">⬅️ Volver al Panel</a>
  </nav>

  <table>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Artista</th>
      <th>Género</th>
      <th>Acciones</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['titulo']; ?></td>
        <td><?= $row['artista']; ?></td>
        <td><?= $row['genero']; ?></td>
        <td>
          <a href="cancion_editar.php?id=<?= $row['id']; ?>" class="btn">✏️ Editar</a>
          <a href="cancion_eliminar.php?id=<?= $row['id']; ?>" class="btn" onclick="return confirm('¿Seguro que quieres eliminar esta canción?')">🗑️ Eliminar</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>