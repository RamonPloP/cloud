<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">


</head>
<body>
    <form action="validar.php" method="post">
        <h1>Inicio de Sesión</h1>
        <p>Matricula <input type="text" placeholder="ingrese su matricula" name="matricula"></p>
        <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>  
        <input style="margin-bottom: 25px" type="submit" value="Ingresar">
        <br>
        <?php
            if(isset($_GET["login"])){
                echo "<h3>Nombre de usuario o contraseña incorrectos</h3>";
            }
        ?>
    </form>

</body>
</html>