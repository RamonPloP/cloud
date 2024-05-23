<?php
    if (!isset($_COOKIE["usuario"])) {
        header("Location: login.php");
        exit();
    }

    $title = "'".$_POST['title']."'";
    $author = $_POST['author'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $desc = $_POST['desc'];

    $conexion = mysqli_connect("localhost", "root", "", "proyecto");

    $query1 = "select * from libros WHERE titulo = $title";
    $resultado1 = mysqli_query($conexion,$query1);
    $registro = mysqli_fetch_array($resultado1);
    if(isset($registro)){
       header("Location: altaslibrosform.php?err=1&");
    }else{
        $query = "INSERT INTO libros (titulo, autor, año_publicacion, genero, `desc`) VALUES ('$title', '$author', '$year', '$genre', '$desc')";
        mysqli_query($conexion, $query);
        mysqli_close($conexion);
        header("Location: altaslibrosform.php");
    }
?>
