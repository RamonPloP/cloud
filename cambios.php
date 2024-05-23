<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $matricula = $_GET["matricula"];
    $contraseña = $_POST['contraseña'];

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $query = "update usuarios SET usuario = '$nombre', apellido = '$apellido', password = '$contraseña' WHERE matricula = $matricula";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: consultas.php");

?>