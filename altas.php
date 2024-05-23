<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $matricula = $_POST["matricula"];
    $contraseña = $_POST['contraseña'];

    $conexion = mysqli_connect("localhost","root","","proyecto");

    $query1 = "select * from usuarios WHERE matricula = $matricula";
    $resultado1 = mysqli_query($conexion,$query1);
    $registro = mysqli_fetch_array($resultado1);
    if(isset($registro)){
       header("Location: altasform.php?err=1&".$matricula);
    }else{
        $query = "insert into usuarios (usuario, matricula, apellido, password) 
              values ('$nombre', '$matricula', '$apellido', '$contraseña')";
        mysqli_query($conexion, $query);
        mysqli_close($conexion);
        header("Location: altasform.php");
    }

?>