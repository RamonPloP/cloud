<?php
if (!isset($_COOKIE["usuario"])) {
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
function validarFormulario() {
    var matricula = document.getElementById('matricula').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var contraseña = document.getElementById('contraseña').value;

    // Validar que la matrícula sea un número
    if (isNaN(matricula)) {
        alert('La matrícula debe ser un número.');
        return false;
    }

    // Validar que el nombre y apellido no contengan números
    var regex = /^[a-zA-Z\s]+$/;
    if (!regex.test(nombre) || !regex.test(apellido)) {
        alert('El nombre y el apellido no pueden contener números.');
        return false;
    }

    // Validar que la contraseña tenga al menos 8 caracteres
    if (contraseña.length < 8) {
        alert('La contraseña debe tener al menos 8 caracteres.');
        return false;
    }

    return true;
}
</script>
</head>
<body>
  <header>
    <h1>Modificar Usuario</h1>
  </header>
  <div class="content">
    <form action=<?php echo "cambios.php?matricula='".$_GET["matricula"]."'" ?>  method="post" onsubmit="return validarFormulario()">
    <div class="form-group">
        <label for="matricula">Matricula:</label>
        <input type="text" id="matricula" name="new_matricula" required value=<?php echo "'".$_GET["matricula"]."'" ?> readonly>
      </div>
      <div class="form-group">
        <label for="nombre">Cambio de nombre:</label>
        <input type="text" id="nombre" name="nombre" required value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from usuarios where matricula= ".$_GET["matricula"].";";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["usuario"].'"';

            mysqli_close($conexion);
        ?>>
      </div>
      <div class="form-group">
        <label for="apellido">Cambio de apellido:</label>
        <input type="text" id="apellido" name="apellido" required value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from usuarios where matricula= ".$_GET["matricula"].";";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["apellido"].'"';

            mysqli_close($conexion);
        ?>>
      </div>
      <div class="form-group">
        <label for="contraseña">Nueva contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from usuarios where matricula= ".$_GET["matricula"].";";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["password"].'"';

            mysqli_close($conexion);
        ?>>
      </div>
      <button type="submit" class="btn">Modificar Usuario</button>
      <?php 
        if(isset($_GET['err'])){
          echo "<h3>Ya existe un usuario con esa matricula</h3>";
        }
      ?>
    </form>
    <a href="consultas.php" class="btn">Volver al Menú</a>
  </div>
</body>
</html>