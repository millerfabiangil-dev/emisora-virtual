<?php
include 'conexion.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM canciones_favoritas WHERE id=$id");
$cancion = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $artista = $_POST['artista'];
    $genero = $_POST['genero'];

    $sql = "UPDATE canciones_favoritas SET titulo='$titulo', artista='$artista', genero='$genero' WHERE id=$id";
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
<head><meta charset="UTF-8"><title>Editar Canción</title></head>
<body style="text-align:center; background:#111; color:#fff;">
  <h1>✏️ Editar Canción</h1>
  <form method="POST">
    <input type="text" name="titulo" value="<?= $cancion['titulo']; ?>" required><br><br>
    <input type="text" name="artista" value="<?= $cancion['artista']; ?>" required><br><br>
    <input type="text" name="genero" value="<?= $cancion['genero']; ?>"><br><br>
    <button type="submit">Actualizar</button>
  </form>
  <a href="canciones.php">⬅️ Volver</a>
</body>
</html>