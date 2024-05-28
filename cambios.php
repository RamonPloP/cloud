<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $matricula = $_GET["matricula"];
    $conexion = mysqli_connect("localhost","root","","proyecto");
    if(isset($_POST['contraseña'])){
        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
        $query = "update usuarios SET usuario = '$nombre', apellido = '$apellido', password = '$contraseña' WHERE matricula = $matricula";
    }else{
        $query = "update usuarios SET usuario = '$nombre', apellido = '$apellido' WHERE matricula = $matricula";
    }
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: consultas.php");

?>