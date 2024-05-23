<?php
    if(!isset($_COOKIE["usuario"])){
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Consultas Libros</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Consultas Libros</h1>
  </header>
  <div class="content">
  <?php
    $conexion = mysqli_connect("localhost","root","","proyecto");

    $query = "select * from libros;";
    $resultado = mysqli_query($conexion,$query);

    while($registro = mysqli_fetch_array($resultado)){
        echo 'Titulo: '.$registro["titulo"];
        echo "<br>";
        echo 'Autor: '.$registro["autor"];
        echo "<br>";
        echo 'Descripcion: '.$registro["año_publicacion"];
        echo "<br>";
        echo 'Descripcion: '.$registro["genero"];
        echo "<br>";
        echo 'Descripcion: '.$registro["desc"];
        echo "<br>";
        echo '<a href="cambioslibrosform.php?libro='.$registro["titulo"].'" class="btn">Editar</a>';
        echo "<br>";echo "<br>";
    }

    mysqli_close($conexion);
?>
  <br>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
