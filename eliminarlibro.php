<?php
    if(!isset($_COOKIE["usuario"])){
        header("Location: login.php");
        exit();
    }

    $title = $_GET['libro'];

    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
    $query = "DELETE FROM libros WHERE titulo = '$title'";
    mysqli_query($conexion, $query);

    mysqli_close($conexion);

    header("Location: consultaslibros.php");
?>
