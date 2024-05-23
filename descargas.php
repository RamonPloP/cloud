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
<title>Descargar Archivos</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #e8f5e9; /* Verde pastel */
    }
    header {
        background-color: #81c784; /* Verde pastel */
        color: #fff;
        padding: 20px;
        text-align: center;
        font-size: 36px;
    }
    .content {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }
    .report-columns {
        display: flex;
        justify-content: space-between;
    }
    .report-column {
        width: 48%;
    }
    ul.reports {
        list-style: none;
        padding: 0;
    }
    ul.reports li {
        margin-bottom: 10px;
    }
    ul.reports a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #81c784; /* Verde pastel */
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    ul.reports a:hover {
        background-color: #66bb6a; /* Verde pastel */
    }
    .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #81c784; /* Verde pastel */
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn:hover {
        background-color: #66bb6a; /* Verde pastel */
    }
</style>
</head>
<body>
<header>
    <h1>Descargar Archivos</h1>
</header>
<div class="content">
    <div class="report-columns">
        <div class="report-column">
            <ul class="reports">
                <?php
                for ($i = 1; $i <= 7; $i++) {
                    echo "<li><a href='document.php?id=$i'>Reporte $i</a></li>";
                }
                ?>
            </ul>
        </div>
        <div class="report-column">
            <ul class="reports">
                <?php
                for ($i = 8; $i <= 14; $i++) {
                    echo "<li><a href='document.php?id=$i'>Reporte $i</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <a href="index.php" class="btn">Volver al Menú</a>
</div>
</body>
</html>
