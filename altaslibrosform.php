<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Altas de Libros</title>
<link rel="stylesheet" href="styles.css">
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        let valid = true;

        const title = document.getElementById("title");
        const author = document.getElementById("author");
        const year = document.getElementById("year");
        const desc = document.getElementById("desc");

        const titleRegex = /^[a-zA-Z0-9\s]+$/;
        const authorRegex = /^[a-zA-Z\s]+$/;
        const yearRegex = /^\d{4}$/;

        if (!titleRegex.test(title.value)) {
            valid = false;
            alert("El título solo puede contener letras, números y espacios.");
        }

        if (!authorRegex.test(author.value)) {
            valid = false;
            alert("El autor solo puede contener letras y espacios.");
        }

        if (!yearRegex.test(year.value)) {
            valid = false;
            alert("El año de publicación debe ser un número de 4 dígitos.");
        }

        if (desc.value.trim() === "") {
            valid = false;
            alert("La descripción no puede estar vacía.");
        }

        if (!valid) {
            event.preventDefault();
        }
    });
});
</script>
</head>
<body>
<header>
    <h1>Altas de Libros</h1>
</header>
<div class="content">
    <h2>Agregar libro</h2>
    <form action="altalibros.php" method="post">
      <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required pattern="[a-zA-Z0-9\s]+" title="El título solo puede contener letras, números y espacios.">
      </div>
      <div class="form-group">
        <label for="author">Autor:</label>
        <input type="text" id="author" name="author" required pattern="[a-zA-Z\s]+" title="El autor solo puede contener letras y espacios.">
      </div>
      <div class="form-group">
        <label for="year">Año de Publicación:</label>
        <input type="text" id="year" name="year" required pattern="\d{4}" title="El año de publicación debe ser un número de 4 dígitos.">
      </div>
      <div class="form-group">
        <label for="genre">Género:</label>
        <select id="genre" name="genre" required>
            <option value="Sin genero">Seleccione un género</option>
            <option value="ficcion">Ficción</option>
            <option value="no-ficcion">No Ficción</option>
            <option value="misterio">Misterio</option>
            <option value="biografia">Biografía</option>
            <option value="fantasia">Fantasía</option>
            <option value="ciencia-ficcion">Ciencia Ficción</option>
            <option value="romance">Romance</option>
            <option value="historia">Historia</option>
        </select>
      </div>
      <div class="form-group">
        <label for="desc">Descripción:</label>
        <input type="text" id="desc" name="desc" required>
      </div>
      <button type="submit" class="btn">Agregar Libro</button>
      <?php
        if(isset($_GET['err'])){
          echo "<h3>El libro con ese titulo ya existe</h3>";
        }
      ?>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>
