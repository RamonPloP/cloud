<?php
    $title = "".$_GET['libro']."";
    $newtitle = $_POST['newtitle'];
    $newauthor = $_POST['newauthor'];
    $newyear = $_POST['newyear'];
    $newgenre = $_POST['newgenre'];
    $desc = $_POST['desc'];

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $query = "UPDATE libros SET titulo = '$newtitle', autor = '$newauthor', año_publicacion = '$newyear', genero = '$newgenre', `desc` = '$desc' WHERE titulo = $title;";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: consultaslibros.php");
?>