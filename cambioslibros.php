<?php
    $title = "'".$_GET['libro']."'";
    $newauthor = $_POST['newauthor'];
    $newyear = $_POST['newyear'];
    $newgenre = $_POST['newgenre'];
    $desc = $_POST['desc'];

    $conexion = mysqli_connect("localhost","root","","proyecto");
    $query = "UPDATE libros SET autor = '$newauthor', año_publicacion = '$newyear', genero = '$newgenre', `desc` = '$desc' WHERE titulo = $title;";
    mysqli_query($conexion, $query);
    mysqli_close($conexion);
    header("Location: consultaslibros.php");
?>

<html>
    <?php
        echo $query;
        echo $title;
    ?>
</html>