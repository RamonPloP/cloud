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
<title>Altas de Libros</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Altas de Libros</h1>
  </header>
  <div class="content">
    <h2>Agregar libro</h2>
    <form action="altalibros.php" method="post">
      <div class="form-group">
        <label for="title">Titulo:</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="desc">Descripcion:</label>
        <input type="text" id="desc" name="desc" required>
      </div>
      <button type="submit" class="btn">Agregar Libro</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
