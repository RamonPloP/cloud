<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $matricula = $_POST["matricula"];
    $contraseña = $_POST['contraseña'];

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $query = "insert into usuarios (usuario, matricula, apellido, password) 
              values ('$nombre', '$matricula', '$apellido', '$contraseña')";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: altasform.php");

?>