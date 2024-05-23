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
<title>Modificar Libro</title>
<link rel="stylesheet" href="styles.css">
<script>
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        let valid = true;

        const newTitle = document.getElementById("newtitle");
        const newAuthor = document.getElementById("newauthor");
        const newYear = document.getElementById("newyear");
        const newGenre = document.getElementById("newgenre");
        const desc = document.getElementById("desc");

        const titleRegex = /^[a-zA-Z0-9\s]+$/;
        const authorRegex = /^[a-zA-Z\s]+$/;
        const yearRegex = /^\d{4}$/;

        if (!titleRegex.test(newTitle.value.trim())) {
            valid = false;
            alert("El cambio de título solo puede contener letras, números y espacios.");
        }

        if (!authorRegex.test(newAuthor.value.trim())) {
            valid = false;
            alert("El cambio de autor solo puede contener letras y espacios.");
        }

        if (!yearRegex.test(newYear.value.trim())) {
            valid = false;
            alert("El cambio de año de publicación debe ser un número de 4 dígitos.");
        }

        if (desc.value.trim() === "") {
            valid = false;
            alert("El cambio de descripción no puede estar vacío.");
        }

        if (newGenre.value.trim() === "") {
            valid = false;
            alert("Seleccione un género para el libro.");
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
    <h1>Modificar Libro</h1>
</header>
<div class="content">
    <form action=<?php echo "cambioslibros.php?libro='".$_GET["libro"]."'" ?> method="post">
        <div class="form-group">
            <label for="title">Libro a modificar:</label>
            <input type="text" id="newtitle" name="newtitle" required pattern="[a-zA-Z0-9\s]+" title="El título solo puede contener letras, números y espacios." value=<?php echo "'".$_GET["libro"]."'" ?>>
        </div>
        <div class="form-group">
            <label for="newauthor">Nuevo autor:</label>
            <input type="text" id="newauthor" name="newauthor" required pattern="[a-zA-Z\s]+" title="El autor solo puede contener letras y espacios." value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from libros where titulo= '".$_GET["libro"]."';";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["autor"].'"';

            mysqli_close($conexion);
        ?>>
        </div>
        <div class="form-group">
            <label for="newyear">Nuevo año de Publicación:</label>
            <input type="text" id="newyear" name="newyear" required pattern="\d{4}" title="El año de publicación debe ser un número de 4 dígitos." value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from libros where titulo= '".$_GET["libro"]."';";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["año_publicacion"].'"';

            mysqli_close($conexion);
        ?>>
        </div>
        <div class="form-group">
            <label for="newgenre">Nuevo género:</label>
            <select id="newgenre" name="newgenre" required>
                <option value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from libros where titulo= '".$_GET["libro"]."';";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["genero"].'"';

            mysqli_close($conexion);
        ?>><?php
                $conexion = mysqli_connect("localhost","root","","proyecto");

                $query = "select * from libros where titulo= '".$_GET["libro"]."';";
                $resultado = mysqli_query($conexion,$query);
                
                $registro = mysqli_fetch_array($resultado);
                echo $registro["genero"];

                mysqli_close($conexion);
            ?></option>
                <option value="Ciccion">Ficción</option>
                <option value="No-ficcion">No Ficción</option>
                <option value="Misterio">Misterio</option>
                <option value="Biografia">Biografía</option>
                <option value="Fantasia">Fantasía</option>
                <option value="Ciencia-ficcion">Ciencia Ficción</option>
                <option value="Romance">Romance</option>
                <option value="Historia">Historia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="desc">Nueva descripción:</label>
            <input type="text" id="desc" name="desc" required value=<?php
            $conexion = mysqli_connect("localhost","root","","proyecto");

            $query = "select * from libros where titulo= '".$_GET["libro"]."';";
            $resultado = mysqli_query($conexion,$query);
            
            $registro = mysqli_fetch_array($resultado);
            echo '"'.$registro["desc"].'"';

            mysqli_close($conexion);
        ?>>
        </div>
        <button type="submit" class="btn">Modificar Libro</button>
    </form>
    <a href="index.php" class="btn">Volver al Menú</a>
</div>
</body>
</html>
