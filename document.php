<?php
if (!isset($_COOKIE["usuario"])) {
    header("Location: login.php");
    exit();
}
$documentId = (int)$_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reporte <?php echo $documentId; ?></title>
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
        text-align: center;
        margin-top: 20px;
    }
    .btn:hover {
        background-color: #66bb6a; /* Verde pastel */
    }
</style>
</head>
<body>
<header>
    <h1>Reporte <?php echo $documentId; ?></h1>
</header>
<div class="content">
    <h1>A continuación se muestra el documento:</h1>
    <object data="descargas/documento<?php echo $documentId; ?>.pdf" type="application/pdf" width="100%" height="500px">
        <p>No se puede visualizar. <a href="descargas/documento<?php echo $documentId; ?>.pdf">Descárgalo entonces</a> </p>
    </object>
    <a href="descargas.php" class="btn">Volver a la lista de documentos</a>
</div>
</body>
</html>
