<?php
    $title = $_POST['title'];
    $newtitle = $_POST['newtitle'];
    $desc = $_POST["desc"];

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $query = "update libros SET titulo = '$newtitle', `desc` = '$desc' WHERE titulo = '$title'";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: cambioslibrosform.php");

?>