<?php
include 'conexion.php';
$id = $_GET['id'];
$conn->query("DELETE FROM canciones_favoritas WHERE id=$id");
header("Location: canciones.php");
exit();
?>