<?php
        $conexion = mysqli_connect("localhost","root","","proyecto");
    $campo1 = $_POST["matricula"];
    $query = "select * from usuarios where matricula = '". $campo1 ."';";
    $resultado = mysqli_query($conexion, $query);

    $registro = mysqli_fetch_array($resultado);
    
    $usuario_correcto = $registro["matricula"];
    $password_correcto = $registro["password"];

    if(($_POST['matricula'] == $usuario_correcto) && ($_POST["contraseña"] == $password_correcto)){
        setcookie("usuario", $_POST["matricula"],time()+60*15);
        header("Location: index.php");
    }else{
        header("Location: login.php?login=1");
    }

?>