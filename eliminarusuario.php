<?php
    if(!isset($_COOKIE["usuario"])) {
        header("Location: login.php");
        exit();
    }
    $matricula = $_GET['matricula'];

    $conexion = mysqli_connect("localhost", "root", "", "proyecto");
    $query = "DELETE FROM usuarios WHERE matricula = '$matricula'";
    mysqli_query($conexion, $query);

    mysqli_close($conexion);

    header("Location: consultas.php");
?>
