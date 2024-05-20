<?php
    if(!isset($_COOKIE["usuario"])){
        header("Location: login.php");
        exit();
    }
?>

<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Usuario</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Modificar Usuario</h1>
  </header>
  <div class="content">
    <form action="cambioslibros.php" method="post">
    <div class="form-group">
        <label for="title">Titulo:</label>
        <select name="title" id="title" required>
          <?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from libros;";
            $resultado = mysqli_query($conexion,$query);
        
            while($registro = mysqli_fetch_array($resultado)){
                echo '<option value="'.$registro["titulo"].'">'.$registro["titulo"].'</option>';
            }
        
            mysqli_close($conexion);
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="newtitle">Cambio de titulo:</label>
        <input type="text" id="newtitle" name="newtitle" required>
      </div>
      <div class="form-group">
        <label for="desc">Cambio de descripcion:</label>
        <input type="text" id="desc" name="desc" required>
      </div>
      <button type="submit" class="btn">Modificar Libro</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
