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
<title>Altas de Registros</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Altas de Registros</h1>
  </header>
  <div class="content">
    <h2>Agregar Usuario</h2>
    <form action="altas.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
      </div>
      <div class="form-group">
        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="matricula" required>
      </div>
      <div class="form-group">
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required>
      </div>
      <button type="submit" class="btn">Agregar Usuario</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
