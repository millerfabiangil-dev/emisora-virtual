<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $artista = $_POST['artista'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO canciones_favoritas (titulo, artista, genero) VALUES ('$titulo','$artista','$genero')";
    if ($conn->query($sql) === TRUE) {
        header("Location: canciones.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Canción</title>
</head>
<body style="text-align:center; background:#111; color:#fff;">
  <h1>➕ Agregar Canción Favorita</h1>
  <form method="POST">
    <input type="text" name="titulo" placeholder="Título" required><br><br>
    <input type="text" name="artista" placeholder="Artista" required><br><br>
    <input type="text" name="genero" placeholder="Género"><br><br>
    <button type="submit">Guardar</button>
  </form>
  <a href="canciones.php">⬅️ Volver</a>
</body>
</html>