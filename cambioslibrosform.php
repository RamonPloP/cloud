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
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        let valid = true;

        const newTitle = document.getElementById("newtitle");
        const desc = document.getElementById("desc");

        if (!soloLetras(newTitle.value.trim())) {
            valid = false;
            alert("El cambio de título solo puede contener letras y espacios.");
        }

        if (!soloLetras(desc.value.trim())) {
            valid = false;
            alert("El cambio de descripción solo puede contener letras y espacios.");
        }

        if (!valid) {
            event.preventDefault();
        }
    });

    function soloLetras(texto) {
        return /^[a-zA-Z\s]+$/.test(texto);
    }
});
</script>
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
        <label for="newtitle">Cambio de título:</label>
        <input type="text" id="newtitle" name="newtitle" required>
      </div>
      <div class="form-group">
        <label for="desc">Cambio de descripción:</label>
        <input type="text" id="desc" name="desc" required>
      </div>
      <button type="submit" class="btn">Modificar Libro</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>