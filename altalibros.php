<?php
    $title = $_POST['title'];
    $desc = $_POST['desc'];

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $query = "insert into libros (titulo, `desc`) values ('$title', '$desc')";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: altaslibrosform.php");

?>