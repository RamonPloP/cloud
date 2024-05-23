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
    .logout-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        background-color: #4caf50; /* Verde */
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    .logout-btn:hover {
        background-color: #388e3c; /* Verde más oscuro */
    }
</style>
</head>
<body>

<header>
    <h1>Bienvenido</h1>
    <a href="logout.php" class="logout-btn">Cerrar Sesión</a>
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

<button class="download-btn">
    <a href="descargas.php">
    <div class="docs"> <h2>Descargas</h2> </div>
    <div class="download">
        <svg class="css-i6dzq1" stroke-linejoin="round" stroke-linecap="round" fill="none" stroke-width="2" stroke="currentColor" height="24" width="24" viewBox="0 0 24 24">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
            <polyline points="7 10 12 15 17 10"></polyline>
            <line y2="3" x2="12" y1="15" x1="12"></line>
        </svg>
  </div>
</button>

</body>
