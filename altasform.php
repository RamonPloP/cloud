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
<title>Altas de Registros</title>
<link rel="stylesheet" href="styles.css">
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        let valid = true;

        const nombre = document.getElementById("nombre");
        const apellido = document.getElementById("apellido");
        const matricula = document.getElementById("matricula");
        const contraseña = document.getElementById("contraseña");

        const nombreRegex = /^[a-zA-Z\s]+$/;
        const apellidoRegex = /^[a-zA-Z\s]+$/;
        const matriculaRegex = /^\d+$/;

        if (!nombreRegex.test(nombre.value)) {
            valid = false;
            alert("El nombre solo puede contener letras y espacios.");
        }

        if (!apellidoRegex.test(apellido.value)) {
            valid = false;
            alert("El apellido solo puede contener letras y espacios.");
        }

        if (!matriculaRegex.test(matricula.value)) {
            valid = false;
            alert("La matrícula solo puede contener números.");
        }

        if (contraseña.value.length < 6) {
            valid = false;
            alert("La contraseña debe tener al menos 6 caracteres.");
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
    <h1>Altas de Registros</h1>
</header>
<div class="content">
    <h2>Agregar Usuario</h2>
    <form action="altas.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required pattern="[a-zA-Z\s]+" title="El nombre solo puede contener letras y espacios.">
      </div>
      <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required pattern="[a-zA-Z\s]+" title="El apellido solo puede contener letras y espacios.">
      </div>
      <div class="form-group">
        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="matricula" required pattern="\d+" title="La matrícula solo puede contener números.">
      </div>
      <div class="form-group">
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required minlength="6" title="La contraseña debe tener al menos 6 caracteres.">
      </div>
      <button type="submit" class="btn">Agregar Usuario</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
</div>
</body>
</html>
