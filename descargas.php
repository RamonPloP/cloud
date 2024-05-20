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
<title>Descargar Archivos</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Descargar Archivos</h1>
  </header>
  <div class="content">
    <p>Aquí puedes descargar archivos relacionados con la aplicación.</p>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
