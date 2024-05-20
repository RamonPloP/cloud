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
    <form action="cambios.php" method="post">
    <div class="form-group">
        <label for="matricula">Matrícula:</label>
        <select name="matricula" id="matricula" required>
          <?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from usuarios;";
            $resultado = mysqli_query($conexion,$query);
        
            while($registro = mysqli_fetch_array($resultado)){
                echo '<option value="'.$registro["matricula"].'">'.$registro["matricula"].'</option>';
            }
        
            mysqli_close($conexion);
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="nombre">Cambio de nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido">Cambio de apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
      </div>
      <div class="form-group">
        <label for="contraseña">Nueva contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>
      </div>
      <button type="submit" class="btn">Modificar Usuario</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
