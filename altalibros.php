<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location: login.php");
    exit();
}

$title = $_POST['title'];
$author = $_POST['author'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$desc = $_POST['desc'];

$conexion = mysqli_connect("localhost", "root", "", "proyecto");
$query = "INSERT INTO libros (titulo, autor, ano_publicacion, genero, `desc`) VALUES ('$title', '$author', '$year', '$genre', '$desc')";
mysqli_query($conexion, $query);
mysqli_close($conexion);
header("Location: altaslibrosform.php");
?>
