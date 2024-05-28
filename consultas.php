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
<title>Consultas Usuarios</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Consultas Usuarios</h1>
  </header>
  <div class="content">
  <?php
    $conexion = mysqli_connect("localhost","root","","proyecto");

    $query = "select * from usuarios;";
    $resultado = mysqli_query($conexion,$query);

    while($registro = mysqli_fetch_array($resultado)){
        echo "Matrícula: ".$registro["matricula"];
        echo "<br>";
        echo "Nombre: ".$registro["usuario"];
        echo "<br>";
        echo "Apellido: ".$registro["apellido"];
        echo "<br>";
        echo '<a href="cambiosform.php?matricula='.$registro["matricula"].'" class="btn">Editar</a>';
        echo '<a href="eliminarusuario.php?matricula='.$registro["matricula"].'" class="btn">Eliminar</a>';
        echo "<br>";echo "<br>";
    }

    mysqli_close($conexion);
?>
  <br>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
