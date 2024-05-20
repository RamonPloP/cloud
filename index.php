<?php
    if(!isset($_COOKIE["usuario"])){
        header("Location: login.php");
        exit();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9; 
        }
        header {
            background-color: #81c784; 
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 36px;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }
        .menu-box {
            width: 45%;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }
        .menu-box:hover {
            transform: translateY(-5px);
        }
        .menu-box h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .menu-options {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        .menu-options li {
            margin-bottom: 10px;
        }
        .menu-options a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #81c784;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .menu-options a:hover {
            background-color: #66bb6a;
        }
        .download-btn {
            display: block;
            width: 150px;
            margin: 30px auto;
            padding: 15px 20px;
            text-align: center;
            background-color: #81c784;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .download-btn:hover {
            background-color: #66bb6a; 
        }
    </style>
</head>
<body>

<header>
    <h1>Bienvenido</h1>
</header>

<div class="container">
    <div class="menu-box">
        <h2>Opciones de Usuarios</h2>
        <ul class="menu-options">
            <li><a href="altasform.php">Altas</a></li>
            <li><a href="consultas.php">Consultas</a></li>
            <li><a href="cambiosform.php">Cambios</a></li>
        </ul>
    </div>

    <div class="menu-box">
        <h2>Opciones de Libros</h2>
        <ul class="menu-options">
            <li><a href="altaslibrosform.php">Altas</a></li>
            <li><a href="consultaslibros.php">Consultas</a></li>
            <li><a href="cambioslibrosform.php">Cambios</a></li>
        </ul>
    </div>
</div>

<a href="#" class="download-btn">Descargas</a>

</body>
</html>
